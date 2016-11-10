<?php
namespace DTS\eBaySDK\Feedback\Services;

/**
 * Base class for the Return Management service.
 */
class FeedbackBaseService extends \DTS\eBaySDK\Services\BaseService
{
    /**
     * HTTP header constant. The API version your application supports.
     */
    const HDR_API_VERSION = 'X-EBAY-SOA-SERVICE-VERSION';

    /**
     * HTTP header constant. The Authentication Token that is used to validate the caller has permission to access the eBay servers.
     */
    const HDR_AUTH_TOKEN = 'X-EBAY-SOA-SECURITY-TOKEN';

    /**
     * HTTP header constant. The name of the operation you are calling.
     */
    const HDR_OPERATION_NAME = 'X-EBAY-SOA-OPERATION-NAME';

    /**
     * @param array $config Optional configuration option values.
     */
    public function __construct(array $config)
    {
        parent::__construct('https://svcs.ebay.com/FeedbackService', 'https://svcs.sandbox.ebay.com/FeedbackService', $config);
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
                'default' => \DTS\eBaySDK\Feedback\Services\FeedbackService::API_VERSION
            ],
            'authToken' => [
                'valid' => ['string'],
                'required' => true
            ]
        ];
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
        $headers = [];

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
