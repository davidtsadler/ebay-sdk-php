<?php
namespace DTS\eBaySDK\Services;

use DTS\eBaySDK\ConfigurationResolver;
use DTS\eBaySDK\UriResolver;
use \DTS\eBaySDK as Functions;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\ResponseInterface;

/**
 * The base class for every eBay REST service class.
 */
abstract class BaseRestService
{
    /**
     * HTTP header constant. Describes the natural language provided in the field values of the request payload.
     */
    const HDR_REQUEST_LANGUAGE = 'Content-Language';

    /**
     * HTTP header constant. Tells the server the natural language in which the client desires the response.
     */
    const HDR_RESPONSE_LANGUAGE = 'Accept-Language';

    /**
     * @var \DTS\eBaySDK\ConfigurationResolver Resolves configuration options.
     */
    private $resolver;

    /**
     * @var \DTS\eBaySDK\UriResolver Resolves uri parameters.
     */
    private $uriResolver;

    /**
     * @var array Associative array storing the current configuration option values.
     */
    private $config;

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config)
    {
        $this->resolver = new ConfigurationResolver(static::getConfigDefinitions());
        $this->uriResolver = new UriResolver();
        $this->config = $this->resolver->resolve($config);
    }

    /**
     * Returns definitions for each configuration option that is supported.
     *
     * @return array An associative array of configuration definitions.
     */
    public static function getConfigDefinitions()
    {
        return [
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
                'default' => [
                    'http_errors' => false
                ]
            ],
            'requestLanguage' => [
                'valid' => ['string']
            ],
            'responseLanguage' => [
                'valid' => ['string']
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
     * Sends an asynchronous API request.
     *
     * @param string $name The name of the operation.
     * @param \DTS\eBaySDK\Types\BaseType $request Request object containing the request information.
     *
     * @return \GuzzleHttp\Promise\PromiseInterface A promise that will be resolved with an object created from the JSON response.
     */
    protected function callOperationAsync($name, \DTS\eBaySDK\Types\BaseType $request = null)
    {
        $operation = static::$operations[$name];

        $paramValues = [];
        $requestValues = [];

        if ($request) {
            $requestArray = $request->toArray();
            $paramValues = array_intersect_key($requestArray, $operation['params']);
            $requestValues = array_diff_key($requestArray, $operation['params']);
        }

        $url = $this->uriResolver->resolve(
            $this->getUrl(),
            $this->getConfig('apiVersion'),
            $operation['resource'],
            $operation['params'],
            $paramValues
        );
        $method = $operation['method'];
        $body = $this->buildRequestBody($requestValues);
        $headers = $this->buildRequestHeaders($body);
        $responseClass = $operation['responseClass'];
        $debug = $this->getConfig('debug');
        $httpHandler = $this->getConfig('httpHandler');
        $httpOptions = $this->getConfig('httpOptions');

        if ($debug !== false) {
            $this->debugRequest($url, $headers, $body);
        }

        $request = new Request($method, $url, $headers, $body);

        return $httpHandler($request, $httpOptions)->then(
            function (ResponseInterface $res) use ($debug, $responseClass) {
                $json = $res->getBody()->getContents();

                if ($debug !== false) {
                    $this->debugResponse($json);
                }

                return new $responseClass(
                    $json !== '' ? json_decode($json, true) : [],
                    $res->getStatusCode(),
                    $res->getHeaders()
                );
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
        return $this->getConfig('sandbox') ? static::$endPoints['sandbox'] : static::$endPoints['production'];
    }

    /**
     * Builds the request body string.
     *
     * @param array $request Associative array that is the request body.
     *
     * @return string The request body in JSON format.
     */
    private function buildRequestBody(array $request)
    {
        return empty($request) ? '' : json_encode($request);
    }

    /**
     * Helper function that builds the HTTP request headers.
     *
     * @param string $body The request body.
     *
     * @return array An associative array of HTTP headers.
     */
    private function buildRequestHeaders($body)
    {
        $headers = $this->getEbayHeaders();

        $headers['Accept'] = 'application/json';
        $headers['Content-Type'] = 'application/json';
        $headers['Content-Length'] = strlen($body);

        // Add optional headers.
        if ($this->getConfig('requestLanguage')) {
            $headers[self::HDR_REQUEST_LANGUAGE] = $this->getConfig('requestLanguage');
        }

        if ($this->getConfig('responseLanguage')) {
            $headers[self::HDR_RESPONSE_LANGUAGE] = $this->getConfig('responseLanguage');
        }

        return $headers;
    }

    /**
     * Derived classes must implement this method that will build the needed eBay http headers.
     *
     * @return array An associative array of eBay http headers.
     */
    abstract protected function getEbayHeaders();

    /**
     * Sends a debug string of the request details.
     *
     * @param string $url API endpoint.
     * @param array $headers Associative array of HTTP headers.
     * @param string $body The JSON body of the request.
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
     * @param string $body The JSON body of the response.
      */
    private function debugResponse($body)
    {
        $this->debug($body);
    }

    /**
     * Sends a debug string via the attach debugger.
     *
     * @param string $str The debug information.
     */
    private function debug($str)
    {
        $debugger = $this->getConfig('debug');
        $debugger($str);
    }
}
