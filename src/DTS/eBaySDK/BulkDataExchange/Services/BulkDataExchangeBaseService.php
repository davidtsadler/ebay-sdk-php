<?php
namespace DTS\eBaySDK\BulkDataExchange\Services;

/**
 * Base class for the BulkDataExchange service.
 */
class BulkDataExchangeBaseService extends \DTS\eBaySDK\Services\BaseService
{
    /**
     * Constants for the various HTTP headers required by the API.
     */
    const HDR_API_VERSION = 'X-EBAY-SOA-SERVICE-VERSION';
    const HDR_AUTH_TOKEN = 'X-EBAY-SOA-SECURITY-TOKEN';
    const HDR_CONTENT_TYPE = 'CONTENT-TYPE';
    const HDR_MESSAGE_PROTOCOL = 'X-EBAY-SOA-MESSAGE-PROTOCOL';
    const HDR_OPERATION_NAME = 'X-EBAY-SOA-OPERATION-NAME';
    const HDR_SERVICE_NAME = 'X-EBAY-SOA-SERVICE-NAME';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config)
    {
        parent::__construct('https://webservices.ebay.com/BulkDataExchangeService', 'https://webservices.sandbox.ebay.com/BulkDataExchangeService', $config);
    }

    public static function getConfigDefinitions()
    {
        $definitions = parent::getConfigDefinitions();

        return $definitions + [
            'apiVersion' => [
                'valid' => ['string'],
                'default' => \DTS\eBaySDK\BulkDataExchange\Services\BulkDataExchangeService::API_VERSION
            ],
            'authToken' => [
                'valid' => ['string'],
                'required' => true
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

        return $headers;
    }
}

