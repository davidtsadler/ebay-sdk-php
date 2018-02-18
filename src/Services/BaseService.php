<?php
namespace DTS\eBaySDK\Services;

use DTS\eBaySDK\Parser\XmlParser;
use DTS\eBaySDK\ConfigurationResolver;
use DTS\eBaySDK\Credentials\CredentialsProvider;
use \DTS\eBaySDK as Functions;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\ResponseInterface;

/**
 * The base class for every eBay service class.
 */
abstract class BaseService
{
    /**
     * Helper constent when build requests that contain attachments.
     */
    const CRLF = "\r\n";

    /**
     * HTTP header constant. Tells the server the encoding in which the client desires the response.
     */
    const HDR_RESPONSE_ENCODING = 'Accept-Encoding';

    /**
     * @var \DTS\eBaySDK\ConfigurationResolver Resolves configuration options.
     */
    private $resolver;

    /**
     * @var array Associative array storing the current configuration option values.
     */
    private $config;

    /**
     * @var string The production URL for the service.
     */
    private $productionUrl;

    /**
     * @var string The sandbox URL for the service.
     */
    private $sandboxUrl;

    /**
     * @param string $productionUrl The production URL.
     * @param string $sandboxUrl The sandbox URL.
     * @param array $config Configuration option values.
     */
    public function __construct(
        $productionUrl,
        $sandboxUrl,
        array $config
    ) {
        $this->resolver = new ConfigurationResolver(static::getConfigDefinitions());
        $this->config = $this->resolver->resolve($config);
        $this->productionUrl = $productionUrl;
        $this->sandboxUrl = $sandboxUrl;
    }

    /**
     * Returns definitions for each configuration option that is supported.
     *
     * @return array An associative array of configuration definitions.
     */
    public static function getConfigDefinitions()
    {
        return [
            'profile' => [
                'valid' => ['string'],
                'fn'    => 'DTS\eBaySDK\applyProfile',
            ],
            'compressResponse' => [
                'valid'   => ['bool'],
                'default' => false
            ],
            'credentials' => [
                'valid'   => ['DTS\eBaySDK\Credentials\CredentialsInterface', 'array', 'callable'],
                'fn'      => 'DTS\eBaySDK\applyCredentials',
                'default' => [CredentialsProvider::class, 'defaultProvider']
            ],
            'debug' => [
                'valid'   => ['bool', 'array'],
                'fn'      => 'DTS\eBaySDK\applyDebug',
                'default' => false
            ],
            'httpHandler' => [
                'valid'   => ['callable'],
                'default' => 'DTS\eBaySDK\defaultHttpHandler'
            ],
            'httpOptions' => [
                'valid'   => ['array'],
                'default' => []
            ],
            'sandbox' => [
                'valid'   => ['bool'],
                'default' => false
            ]
        ];
    }

    /**
     * Method to get the service's configuration.
     *
     * @param string|null $option The name of the option whos value will be returned.
     *
     * @return mixed Returns an associative array of configuration options if no parameters are passed,
     * otherwise returns the value for the specified configuration option.
     */
    public function getConfig($option = null)
    {
        return $option === null
            ? $this->config
            : (isset($this->config[$option])
                ? $this->config[$option]
                : null);
    }

    /**
     * Set multiple configuration options.
     *
     * @param array $configuration Associative array of configuration options and their values.
     */
    public function setConfig(array $configuration)
    {
        $this->config = Functions\arrayMergeDeep(
            $this->config,
            $this->resolver->resolveOptions($configuration)
        );
    }

    /**
     * Helper method to return the value of the credentials configuration option.
     *
     * @return \DTS\eBaySDK\Credentials\CredentialsInterface
     */
    public function getCredentials()
    {
        return $this->getConfig('credentials');
    }

    /**
     * Sends an asynchronous API request.
     *
     * @param string $name The name of the operation.
     * @param \DTS\eBaySDK\Types\BaseType $request Request object containing the request information.
     * @param string $responseClass The name of the PHP class that will be created from the XML response.
     *
     * @return \GuzzleHttp\Promise\PromiseInterface A promise that will be resolved with an object created from the XML response.
     */
    protected function callOperationAsync($name, \DTS\eBaySDK\Types\BaseType $request, $responseClass)
    {
        $url = $this->getUrl();
        $body = $this->buildRequestBody($request);
        $headers = $this->buildRequestHeaders($name, $request, $body);
        $debug = $this->getConfig('debug');
        $httpHandler = $this->getConfig('httpHandler');
        $httpOptions = $this->getConfig('httpOptions');

        if ($debug !== false) {
            $this->debugRequest($url, $headers, $body);
        }

        $request = new Request('POST', $url, $headers, $body);

        return $httpHandler($request, $httpOptions)->then(
            function (ResponseInterface $res) use ($debug, $responseClass) {
                list($xmlResponse, $attachment) = $this->extractXml($res->getBody()->getContents());

                if ($debug !== false) {
                    $this->debugResponse($xmlResponse);
                }

                $xmlParser = new XmlParser($responseClass);

                $response = $xmlParser->parse($xmlResponse);
                $response->attachment($attachment);

                return $response;
            }
        );
    }

    /**
     * Helper function to return the URL as determined by the sandbox configuration option.
     *
     * @return string Either the production or sandbox URL.
     */
    private function getUrl()
    {
        return $this->getConfig('sandbox') ? $this->sandboxUrl : $this->productionUrl;
    }

    /**
     * Builds the request body string.
     *
     * @param \DTS\eBaySDK\Types\BaseType $request Request object containing the request information.
     *
     * @return string The request body.
     */
    protected function buildRequestBody(\DTS\eBaySDK\Types\BaseType $request)
    {
        if (!$request->hasAttachment()) {
            return $request->toRequestXml();
        } else {
            return $this->buildXopDocument($request).$this->buildAttachmentBody($request->attachment());
        }
    }

    /**
     * Builds the XOP document part of the request body string.
     *
     * @param \DTS\eBaySDK\Types\BaseType $request Request object containing the request information.
     *
     * @return string The XOP document part of request body.
     */
    private function buildXopDocument(\DTS\eBaySDK\Types\BaseType $request)
    {
        return sprintf(
            '%s%s%s%s%s',
            '--MIME_boundary'.self::CRLF,
            'Content-Type: application/xop+xml;charset=UTF-8;type="text/xml"'.self::CRLF,
            'Content-Transfer-Encoding: 8bit'.self::CRLF,
            'Content-ID: <request.xml@devbay.net>'.self::CRLF.self::CRLF,
            $request->toRequestXml().self::CRLF
        );
    }

    /**
     * Builds the attachment part of the request body string.
     *
     * @param array $attachment The attachment
     *
     * @return string The attachment part of request body.
     */
    private function buildAttachmentBody(array $attachment)
    {
        return sprintf(
            '%s%s%s%s%s%s',
            '--MIME_boundary'.self::CRLF,
            'Content-Type: '.$attachment['mimeType'].self::CRLF,
            'Content-Transfer-Encoding: binary'.self::CRLF,
            'Content-ID: <attachment.bin@devbay.net>'.self::CRLF.self::CRLF,
            $attachment['data'].self::CRLF,
            '--MIME_boundary--'
        );
    }

    /**
     * Builds the XML payload part of a multipart/form-data request body.
     *
     * @param \DTS\eBaySDK\Types\BaseType $request Request object containing the request information.
     *
     * @return string The XML payload part of a multipart/form-data request body.
     */
    protected function buildMultipartFormDataXMLPayload(\DTS\eBaySDK\Types\BaseType $request)
    {
        return sprintf(
            '%s%s%s',
            '--boundary'.self::CRLF,
            'Content-Disposition: form-data; name="XML Payload"'.self::CRLF.self::CRLF,
            $request->toRequestXml().self::CRLF
        );
    }


    /**
     * Builds the file part of a multipart/form-data request body.
     *
     * @param string $name
     * @param array $attachment
     *
     * @return string The file part of a multipart/form-data request body.
     */
    protected function buildMultipartFormDataFilePayload($name, $attachment)
    {
        return sprintf(
            '%s%s%s%s%s',
            '--boundary'.self::CRLF,
            'Content-Disposition: form-data; name="'.$name.'"; filename="picture"'.self::CRLF,
            'Content-Type: '.$attachment['mimeType'].self::CRLF.self::CRLF,
            $attachment['data'].self::CRLF,
            '--boundary--'
        );
    }

    /**
     * Helper function that builds the HTTP request headers.
     *
     * @param string $name The name of the operation.
     * @param \DTS\eBaySDK\Types\BaseType $request Request object containing the request information.
     * @param string $body The request body.
     *
     * @return array An associative array of HTTP headers.
     */
    private function buildRequestHeaders($name, $request, $body)
    {
        $headers = [];

        if ($request->hasAttachment()) {
            $headers['Content-Type'] = 'multipart/related;boundary=MIME_boundary;type="application/xop+xml";start="<request.xml@devbay.net>";start-info="text/xml"';
        } else {
            $headers['Content-Type'] = 'text/xml';
        }

        if ($this->getConfig('compressResponse')) {
            $headers[self::HDR_RESPONSE_ENCODING] = 'application/gzip';
        }

        $headers['Content-Length'] = strlen($body);

        return array_merge($headers, $this->getEbayHeaders($name));
    }

    /**
     * Extracts the XML from the response if it contains an attachment.
     *
     * @param string $response The XML response body.
     *
     * @return array first item is the XML part of response body and the second
     * is an attachement if one was present in the API response.
     */
    private function extractXml($response)
    {
        /**
         * Ugly way of seeing if an attachment is present in the response.
         */
        if (strpos($response, 'application/xop+xml') === false) {
            return [$response, ['data' => null, 'mimeType' => null]];
        } else {
            return $this->extractXmlAndAttachment($response);
        }
    }

    /**
     * Extracts the XML and the attachment from the response if it contains an attachment.
     *
     * @param string $response The XML response body.
     *
     * @return string The XML part of response body.
     */
    private function extractXmlAndAttachment($response)
    {
        $attachment = ['data' => null, 'mimeType' => null];

        preg_match('/\r\n/', $response, $matches, PREG_OFFSET_CAPTURE);
        $boundary = substr($response, 0, $matches[0][1]);

        $xmlStartPos = strpos($response, '<?xml ');
        $xmlEndPos = strpos($response, $boundary, $xmlStartPos) - 2;
        $xml = substr($response, $xmlStartPos, $xmlEndPos - $xmlStartPos);

        preg_match('/\r\n\r\n/', $response, $matches, PREG_OFFSET_CAPTURE, $xmlEndPos);
        $attachmentStartPos = $matches[0][1] + 4;
        $attachmentEndPos = strpos($response, $boundary, $attachmentStartPos) - 2;
        $attachment['data'] = substr($response, $attachmentStartPos, $attachmentEndPos - $attachmentStartPos);

        $mimeTypeStartPos = strpos($response, 'Content-Type: ', $xmlEndPos) + 14;
        preg_match('/\r\n/', $response, $matches, PREG_OFFSET_CAPTURE, $mimeTypeStartPos);
        $mimeTypeEndPos = $matches[0][1];
        $attachment['mimeType'] = substr($response, $mimeTypeStartPos, $mimeTypeEndPos - $mimeTypeStartPos);

        return [$xml, $attachment];
    }

    /**
     * Derived classes must implement this method that will build the needed eBay http headers.
     *
     * @param string $operationName The name of the operation been called.
     *
     * @return array An associative array of eBay http headers.
     */
    abstract protected function getEbayHeaders($operationName);

    /**
     * Sends a debug string of the request details.
     *
     * @param string $url API endpoint.
     * @param array  $headers Associative array of HTTP headers.
     * @param string $body The XML body of the POST request.
      */
    private function debugRequest($url, array $headers, $body)
    {
        $str = $url.PHP_EOL;

        $str .= array_reduce(array_keys($headers), function ($str, $key) use ($headers) {
            $str .= $key.': '.$headers[$key].PHP_EOL;
            return $str;
        }, '');

        $str .= $body;

        $this->debug($str);
    }

    /**
     * Sends a debug string of the response details.
     *
     * @param string $body The XML body of the response.
      */
    private function debugResponse($body)
    {
        $this->debug($body);
    }

    /**
     * Sends a debug string via the attach debugger.
     *
     * @param string $str
     */
    private function debug($str)
    {
        $debugger = $this->getConfig('debug');
        $debugger($str);
    }
}
