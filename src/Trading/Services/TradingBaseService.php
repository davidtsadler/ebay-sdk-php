<?php
namespace DTS\eBaySDK\Trading\Services;

use DTS\eBaySDK\Trading\Types;

/**
 * Base class for the Trading service.
 */
class TradingBaseService extends \DTS\eBaySDK\Services\BaseService
{
    /**
     * HTTP header constant. The API version your application supports.
     */
    const HDR_API_VERSION = 'X-EBAY-API-COMPATIBILITY-LEVEL';

    /**
     * HTTP header constant. Your application ID.
     */
    const HDR_APP_ID = 'X-EBAY-API-APP-NAME';

    /**
     * HTTP header constant. The OAUTH Authentication Token that is used to validate the caller has permission to access the eBay servers.
     */
    const HDR_AUTHORIZATION = 'X-EBAY-API-IAF-TOKEN';

    /**
     * HTTP header constant. Your certificate ID.
     */
    const HDR_CERT_ID = 'X-EBAY-API-CERT-NAME';

    /**
     * HTTP header constant. Your developer ID.
     */
    const HDR_DEV_ID = 'X-EBAY-API-DEV-NAME';

    /**
     * HTTP header constant. The name of the operation you are calling.
     */
    const HDR_OPERATION_NAME = 'X-EBAY-API-CALL-NAME';

    /**
     * HTTP header constant. The site ID of the eBay site the request is for.
     */
    const HDR_SITE_ID = 'X-EBAY-API-SITEID';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config)
    {
        parent::__construct('https://api.ebay.com/ws/api.dll', 'https://api.sandbox.ebay.com/ws/api.dll', $config);
    }

    /**
     * Returns definitions for each configuration option that is supported.
     *
     * @return array An associative array of configuration definitions.
     */
    public static function getConfigDefinitions()
    {
        $definitions = parent::getConfigDefinitions();

        return $definitions + [
            'apiVersion' => [
                'valid' => ['string'],
                'default' => \DTS\eBaySDK\Trading\Services\TradingService::API_VERSION,
                'required' => true
            ],
            'authorization' => [
                'valid' => ['string']
            ],
            'authToken' => [
                'valid' => ['string']
            ],
            'siteId' => [
                'valid' => ['int', 'string'],
                'required' => true
            ]
        ];
    }

    /**
     * Sends an API request.
     *
     * This method overrides the parent so that it can modify
     * the request object before it is handled by the parent class.
     *
     * @param string $name The name of the operation.
     * @param \DTS\eBaySDK\Types\BaseType $request Request object containing the request information.
     * @param string $responseClass The name of the PHP class that will be created from the XML response.
     *
     * @return \GuzzleHttp\Promise\PromiseInterface A promise that will be resolved with an object created from the XML response.
     */
    protected function callOperationAsync($name, \DTS\eBaySDK\Types\BaseType $request, $responseClass)
    {
        /**
         * Modify the request object to include the auth token that was set up in the configuration.
         */
        if ($this->getConfig('authorization') !== null) {
            /**
             * Don't send requester credentials if oauth authentication needed.
             */
            if (isset($request->RequesterCredentials)) {
                unset($request->RequesterCredentials);
            }
        } elseif ($this->getConfig('authToken') !== null) {
            /**
             * Don't modify a request if the token already exists.
             */
            if (!isset($request->RequesterCredentials)) {
                $request->RequesterCredentials = new \DTS\eBaySDK\Trading\Types\CustomSecurityHeaderType();
            }
            if (!isset($request->RequesterCredentials->eBayAuthToken)) {
                $request->RequesterCredentials->eBayAuthToken = $this->getConfig('authToken');
            }
        }

        return parent::callOperationAsync($name, $request, $responseClass);
    }

    /**
     * Builds the needed eBay HTTP headers.
     *
     * @param string $operationName The name of the operation been called.
     *
     * @return array An associative array of eBay http headers.
     */
    protected function getEbayHeaders($operationName)
    {
        $credentials = $this->getConfig('credentials');
        $appId = $credentials->getAppId();
        $certId = $credentials->getCertId();
        $devId = $credentials->getDevId();

        $headers = [];

        // Add required headers first.
        $headers[self::HDR_API_VERSION] = $this->getConfig('apiVersion');
        $headers[self::HDR_OPERATION_NAME] = $operationName;
        $headers[self::HDR_SITE_ID] = $this->getConfig('siteId');

        // Add optional headers.
        if ($appId) {
            $headers[self::HDR_APP_ID] = $appId;
        }

        if ($certId) {
            $headers[self::HDR_CERT_ID] = $certId;
        }

        if ($devId) {
            $headers[self::HDR_DEV_ID] = $devId;
        }

        if ($this->getConfig('authorization')) {
            $headers[self::HDR_AUTHORIZATION] = $this->getConfig('authorization');
        }

        /**
         * Note that we have no way of detecting that the actual request has an attachment.
         */
        if ($operationName === 'UploadSiteHostedPictures') {
            $headers['Content-Type'] = 'multipart/form-data;boundary=boundary';
        }

        return $headers;
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
        if ($request->hasAttachment() && $request instanceof Types\UploadSiteHostedPicturesRequestType) {
            return $this->buildMultipartFormDataXMLPayload($request).$this->buildMultipartFormDataFilePayload($request->PictureName, $request->attachment());
        } else {
            return parent::buildRequestBody($request);
        }
    }
}
