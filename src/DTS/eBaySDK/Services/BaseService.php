<?php
/**
 * Copyright 2014 David T. Sadler
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace DTS\eBaySDK\Services;

use DTS\eBaySDK\Parser\XmlParser;
use DTS\eBaySDK\Exceptions;
use DTS\eBaySDK\HttpClient\HttpClient;
use DTS\eBaySDK\ConfigurationResolver;
use DTS\eBaySDK\Credentials\CredentialsProvider;
use \DTS\eBaySDK as Functions;

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
     * @var DTS\eBaySDK\ConfigurationResolver Resolves configuration options.
     */
    private $resolver;

    /**
     * @var mixed The object that will handle the actual sending of the API request.
     */
    private $httpClient;

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
     * @var \Psr\Log\LoggerInterface The logger for the service.
     */
    private $logger;

    /**
     * @param string $productionUrl The production URL.
     * @param string $sandboxUrl The sandbox URL.
     * @param array $config Configuration option values.
     * @param \DTS\eBaySDK\Interfaces\HttpClientInterface $httpClient The object that will handle sending requests to the API.
     */
    public function __construct(
        $productionUrl,
        $sandboxUrl,
        $config,
        \DTS\eBaySDK\Interfaces\HttpClientInterface $httpClient = null
    ) {
        $this->resolver = new ConfigurationResolver(static::getConfigDefinitions());
        $this->config = $this->resolver->resolve($config);
        $this->productionUrl = $productionUrl;
        $this->sandboxUrl = $sandboxUrl;
        $this->httpClient = $httpClient ? $httpClient : new \DTS\eBaySDK\HttpClient\HttpClient();
        $this->logger = null;
    }

    /**
     * Get an array of service configuration option definitions.
     *
     * @return array
     */
    public static function getConfigDefinitions()
    {
        return [
            'profile' => [
                'valid' => ['string'],
                'fn'    => 'DTS\eBaySDK\apply_profile',
            ],
            'credentials' => [
                'valid' => ['DTS\eBaySDK\Interfaces\CredentialsInterface', 'array', 'callable'],
                'fn'    => 'DTS\eBaySDK\apply_credentials',
                'default' => [CredentialsProvider::class, 'defaultProvider']
            ],
            'debug' => [
                'valid'   => ['bool'],
                'default' => false
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
     * @return mixed Returns an associative array of configuration options if no parameters are passed, otherwise returns the value for the specified configuration option.
     */
    public function getConfig($option = null)
    {
        return $option === null
            ? $this->config
            : (isset($this->config[$option])
                ? $this->config[$option]
                : null);
    }

    public function setConfig($configuration)
    {
        $this->config = Functions\array_merge_deep(
            $this->config,
            $this->resolver->resolve_options($configuration)
        );
    }

    /**
     *
     * @param $logger \Psr\Log\LoggerInterface The logger instance the service will use.
     *
     * @return \Psr\Log\LoggerInterface The logger instance or null if one hasn't been assigned.
     */
    public function logger(\Psr\Log\LoggerInterface $logger = null)
    {
        if ($logger) {
            $this->logger = $logger;
        }

        return $this->logger;
    }

    /**
     *
     * @return \DTS\eBaySDK\Interfaces\HttpClientInterface
     */
    public function httpClient()
    {
        return $this->httpClient;
    }

    /**
     * @return \DTS\eBaySDK\Interfaces\CredentialsInterface
     */
    public function getCredentials()
    {
        return $this->getConfig('credentials');
    }

    /**
     * Sends an API request.
     *
     * @param string $name The name of the operation.
     * @param \DTS\eBaySDK\Types\BaseType $request Request object containing the request information.
     * @param string The name of the PHP class that will be created from the XML response.
     *
     * @return mixed A response object created from the XML respose.
     */
    protected function callOperation($name, \DTS\eBaySDK\Types\BaseType $request, $responseClass)
    {
        $debug = $this->getConfig('debug');

        $url = $this->getUrl();
        $body = $this->buildRequestBody($request);
        $headers = $this->getEbayHeaders($name);

        if ($request->hasAttachment()) {
            $headers['Content-Type'] = 'multipart/related;boundary=MIME_boundary;type="application/xop+xml";start="<request.xml@devbay.net>";start-info="text/xml"';
        } else {
            $headers['Content-Type'] = 'text/xml';
        }
        $headers['Content-Length'] = strlen($body);

        if ($debug) {
            $this->logRequest($url, $name, $headers, $body);
        }

        list($xmlResponse, $attachment) = $this->extractXml($this->httpClient->post($url, $headers, $body));

        if ($debug) {
            $this->logResponse($xmlResponse);
        }

        $xmlParser = new XmlParser($responseClass);

        $response = $xmlParser->parse($xmlResponse);
        $response->attachment($attachment);

        return $response;
    }

    /**
     * Builds the request body string.
     *
     * @param \DTS\eBaySDK\Types\BaseType $request Request object containing the request information.
     *
     * @return string The request body.
     */
    private function buildRequestBody(\DTS\eBaySDK\Types\BaseType $request)
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
     * @param array $attachment The attachement
     *
     * @return string The attachment part of request body.
     */
    private function buildAttachmentBody($attachment)
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
     * Extracts the XML from the response if it contains an attachment.
     *
     * @param string The XML response body.
     *
     * @return array first item is the XML part of response body and the second
     *               is an attachement if one was present in the API response.
     */
    private function extractXml($response)
    {
        /**
         * Ugly way of seeing if an attachment is present in the response.
         */
        if (strpos($response, 'application/xop+xml') === false) {
            return array($response, array('data' => null, 'mimeType' => null));
        } else {
            return $this->extractXmlAndAttachment($response);
        }
    }

    /**
     * Extracts the XML and the attachment from the response if it contains an attachment.
     *
     * @param string The XML response body.
     *
     * @return string The XML part of response body.
     */
    private function extractXmlAndAttachment($response)
    {
        $attachment = array('data' => null, 'mimeType' => null);

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

        return array($xml, $attachment);
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
     * Helper function to return the URL as determined by the sandbox configuration option.
     *
     * @returns string Either the production or sandbox URL.
     */
    private function getUrl()
    {
        return $this->getConfig('sandbox') ? $this->sandboxUrl : $this->productionUrl;
    }

    /**
     * Logs the request details.
     *
     * @param string $name The name of the operation.
     * @param string $url API endpoint.
     * @param array  $headers Associative array of HTTP headers.
     * @param string $body The XML body of the POST request.
      */
    private function logRequest($url, $name, $headers, $body)
    {
        if ($this->logger) {
            $this->logger->debug('Request', array(
                'url' => $url,
                'name' => $name,
                'headers' => $headers,
                'body' => $body
            ));
        }
    }

    /**
     * Logs the response details.
     *
     * @param string $body The XML body of the response.
      */
    private function logResponse($body)
    {
        if ($this->logger) {
            $this->logger->debug('Response', array(
                'body' => $body
            ));
        }
    }
}

