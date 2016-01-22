<?php
namespace DTS\eBaySDK\ReturnManagement\Services;

/**
 * Base class for the Return Management service.
 */
class ReturnManagementBaseService extends \DTS\eBaySDK\Services\BaseService
{
    /**
     * Constants for the various HTTP headers required by the API.
     */
    const HDR_API_VERSION = 'X-EBAY-SOA-SERVICE-VERSION';
    const HDR_AUTH_TOKEN = 'X-EBAY-SOA-SECURITY-TOKEN';
    const HDR_CONTENT_TYPE = 'CONTENT-TYPE';
    const HDR_GLOBAL_ID = 'X-EBAY-SOA-GLOBAL-ID';
    const HDR_MESSAGE_ENCODING = 'X-EBAY-SOA-MESSAGE-ENCODING';
    const HDR_MESSAGE_PROTOCOL = 'X-EBAY-SOA-MESSAGE-PROTOCOL';
    const HDR_OPERATION_NAME = 'X-EBAY-SOA-OPERATION-NAME';
    const HDR_SERVICE_NAME = 'X-EBAY-SOA-SERVICE-NAME';
    const HDR_REQUEST_FORMAT = 'X-EBAY-SOA-REQUEST-DATA-FORMAT';
    const HDR_RESPONSE_FORMAT = 'X-EBAY-SOA-RESPONSE-DATA-FORMAT';

    /**
     * @param array $config Optional configuration option values.
     */
    public function __construct(array $config)
    {
        parent::__construct('https://svcs.ebay.com/services/returns/v1/ReturnManagementService', 'https://svcs.sandbox.ebay.com/services/returns/v1/ReturnManagementService', $config);
    }

    public static function getConfigDefinitions()
    {
        $definitions = parent::getConfigDefinitions();

        return $definitions + [
            'apiVersion' => [
                'valid' => ['string'],
                'default' => \DTS\eBaySDK\ReturnManagement\Services\ReturnManagementService::API_VERSION
            ],
            'authToken' => [
                'valid' => ['string'],
                'required' => true
            ],
            'globalId' => [
                'valid' => ['string']
            ]
        ];
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
        $headers = array();

        // Add required headers first.
        $headers[self::HDR_AUTH_TOKEN] = $this->getConfig('authToken');
        $headers[self::HDR_OPERATION_NAME] = $operationName;

        // Add optional headers.
        if ($this->getConfig('apiVersion')) {
            $headers[self::HDR_API_VERSION] = $this->getConfig('apiVersion');
        }

        if ($this->getConfig('globalId')) {
            $headers[self::HDR_GLOBAL_ID] = $this->getConfig('globalId');
        }

        return $headers;
    }
}

