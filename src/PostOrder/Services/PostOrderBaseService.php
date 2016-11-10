<?php
namespace DTS\eBaySDK\PostOrder\Services;

/**
 * Base class for the PostOrder service.
 */
class PostOrderBaseService extends \DTS\eBaySDK\Services\BaseRestService
{
    /**
     * @var array $endPoints The API endpoints.
     */
    protected static $endPoints = [
        'sandbox'    => 'https://api.sandbox.ebay.com/post-order',
        'production' => 'https://api.ebay.com/post-order'
    ];

    /**
     * HTTP header constant. The Authentication Token that is used to validate the caller has permission to access the eBay servers.
     */
    const HDR_AUTH_TOKEN = 'Authorization';

    /**
     * HTTP header constant. The global ID of the eBay site on which the transaction took place.
     */
    const HDR_MARKETPLACE_ID = 'X-EBAY-C-MARKETPLACE-ID';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config)
    {
        parent::__construct($config);
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
                'default' => \DTS\eBaySDK\PostOrder\Services\PostOrderService::API_VERSION,
                'required' => true
            ],
            'authToken' => [
                'valid' => ['string'],
                'required' => true
            ],
            'marketplaceId' => [
                'valid' => ['string']
            ]
        ];
    }

    /**
     * Builds the needed eBay HTTP headers.
     *
     * @return array An associative array of eBay HTTP headers.
     */
    protected function getEbayHeaders()
    {
        $headers = [];

        // Add required headers first.
        $headers[self::HDR_AUTH_TOKEN] = 'TOKEN '.$this->getConfig('authToken');

        // Add optional headers.
        if ($this->getConfig('marketplaceId')) {
            $headers[self::HDR_MARKETPLACE_ID] = $this->getConfig('marketplaceId');
        }

        return $headers;
    }
}
