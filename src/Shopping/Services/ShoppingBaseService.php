<?php
namespace DTS\eBaySDK\Shopping\Services;

/**
 * Base class for the Shopping service.
 */
class ShoppingBaseService extends \DTS\eBaySDK\Services\BaseService
{
    /**
     * HTTP header constant. Your affiliate ID.
     */
    const HDR_AFFILIATE_USER_ID = 'X-EBAY-API-AFFILIATE-USER-ID';

    /**
     * HTTP header constant. The API version your application supports.
     */
    const HDR_API_VERSION = 'X-EBAY-API-VERSION';

    /**
     * HTTP header constant. Your application ID.
     */
    const HDR_APP_ID = 'X-EBAY-API-APP-ID';

    /**
     * HTTP header constant. The name of the operation you are calling.
     */
    const HDR_OPERATION_NAME = 'X-EBAY-API-CALL-NAME';

    /**
     * HTTP header constant. Indicates that the request uses XML.
     */
    const HDR_REQUEST_FORMAT = 'X-EBAY-API-REQUEST-ENCODING';

    /**
     * HTTP header constant. The site ID of the eBay site the request is for.
     */
    const HDR_SITE_ID = 'X-EBAY-API-SITE-ID';

    /**
     * HTTP header constant. Your tracking ID.
     */
    const HDR_TRACKING_ID = 'X-EBAY-API-TRACKING-ID';

    /**
     * HTTP header constant. Your tracking partner ID.
     */
    const HDR_TRACKING_PARTNER_CODE = 'X-EBAY-API-TRACKING-PARTNER-CODE';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config)
    {
        parent::__construct('http://open.api.ebay.com/shopping', 'http://open.api.sandbox.ebay.com/shopping', $config);
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
            'affiliateUserId' => [
                'valid' => ['string']
            ],
            'apiVersion' => [
                'valid' => ['string'],
                'default' => \DTS\eBaySDK\Shopping\Services\ShoppingService::API_VERSION,
                'required' => true
            ],
            'siteId' => [
                'valid' => ['int', 'string']
            ],
            'trackingId' => [
                'valid' => ['string']
            ],
            'trackingPartnerCode' => [
                'valid' => ['string']
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
        $headers[self::HDR_API_VERSION] = $this->getConfig('apiVersion');
        $headers[self::HDR_APP_ID] = $this->getConfig('credentials')->getAppId();
        $headers[self::HDR_OPERATION_NAME] = $operationName;
        $headers[self::HDR_REQUEST_FORMAT] = 'XML';

        // Add optional headers.
        // Take into account siteId is an integer that can be set to zero.
        if ($this->getConfig('siteId') !== null) {
            $headers[self::HDR_SITE_ID] = $this->getConfig('siteId');
        }

        if ($this->getConfig('affiliateUserId')) {
            $headers[self::HDR_AFFILIATE_USER_ID] = $this->getConfig('affiliateUserId');
        }

        if ($this->getConfig('trackingId')) {
            $headers[self::HDR_TRACKING_ID] = $this->getConfig('trackingId');
        }

        if ($this->getConfig('trackingPartnerCode')) {
            $headers[self::HDR_TRACKING_PARTNER_CODE] = $this->getConfig('trackingPartnerCode');
        }

        return $headers;
    }
}
