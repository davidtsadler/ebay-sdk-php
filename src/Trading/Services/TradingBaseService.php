<?php
namespace DTS\eBaySDK\Trading\Services;

/**
 * Base class for the Trading service.
 */
class TradingBaseService extends \DTS\eBaySDK\Services\BaseService
{
    /**
     * Constants for the various HTTP headers required by the API.
     */
    const HDR_API_VERSION = 'X-EBAY-API-COMPATIBILITY-LEVEL';
    const HDR_APP_ID = 'X-EBAY-API-APP-NAME';
    const HDR_CERT_ID = 'X-EBAY-API-CERT-NAME';
    const HDR_CONTENT_LENGTH = 'Content-Length';
    const HDR_CONTENT_TYPE = 'Content-Type';
    const HDR_DEV_ID = 'X-EBAY-API-DEV-NAME';
    const HDR_OPERATION_NAME = 'X-EBAY-API-CALL-NAME';
    const HDR_SITE_ID = 'X-EBAY-API-SITEID';
	const HDR_API_TOKEN = 'X-EBAY-API-IAF-TOKEN';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config)
    {
        parent::__construct('https://api.ebay.com/ws/api.dll', 'https://api.sandbox.ebay.com/ws/api.dll', $config);
    }

    public static function getConfigDefinitions()
    {
        $definitions = parent::getConfigDefinitions();

        return $definitions + [
            'apiVersion' => [
                'valid' => ['string'],
                'default' => \DTS\eBaySDK\Trading\Services\TradingService::API_VERSION,
                'required' => true
            ],
            'authToken' => [
                'valid' => ['string']
            ],
            'siteId' => [
                'valid' => ['int', 'string'],
                'required' => true
            ],
            'authorization' => [
	            'valid' => ['string']
            ]
        ];
    }

    /**
     * Sends an API request.
     *
     * This method overrides the parent so that it can modify
     * the request object before is handled by the parent class.
     *
     * @param string $name The name of the operation.
     * @param \DTS\eBaySDK\Types\BaseType $request Request object containing the request information.
     * @param string The name of the PHP class that will be created from the XML response.
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

	    }
        elseif ($this->getConfig('authToken') !== null) {
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
     * Build the needed eBay HTTP headers.
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
            $headers[self::HDR_APP_ID] = $credentials->getAppId();
        }

        if ($certId) {
            $headers[self::HDR_CERT_ID] = $credentials->getCertId();
        }

        if ($devId) {
            $headers[self::HDR_DEV_ID] = $credentials->getDevId();
        }

	    if ($this->getConfig('authorization') !== null)
	    {
		    $headers[self::HDR_API_TOKEN] = $this->getConfig('authorization');
	    }

        return $headers;
    }
}
