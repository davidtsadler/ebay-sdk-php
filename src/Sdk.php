<?php
namespace DTS\eBaySDK;

/**
 * Builds DTS\eBaySDK services based on passed configuration options.
 *
 * @method \DTS\eBaySDK\Account\Services\AccountService createAccount(array $args = [])
 * @method \DTS\eBaySDK\Analytics\Services\AnalyticsService createAnalytics(array $args = [])
 * @method \DTS\eBaySDK\Browse\Services\BrowseService createBrowse(array $args = [])
 * @method \DTS\eBaySDK\BulkDataExchange\Services\BulkDataExchangeService createBulkDataExchange(array $args = [])
 * @method \DTS\eBaySDK\BusinessPoliciesManagement\Services\BusinessPoliciesManagementService createBusinessPoliciesManagement(array $args = [])
 * @method \DTS\eBaySDK\Feedback\Services\FeedbackService createFeedback(array $args = [])
 * @method \DTS\eBaySDK\FileTransfer\Services\FileTransferService createFileTransfer(array $args = [])
 * @method \DTS\eBaySDK\Finding\Services\FindingService createFinding(array $args = [])
 * @method \DTS\eBaySDK\Fulfillment\Services\FulfillmentService createFulfillment(array $args = [])
 * @method \DTS\eBaySDK\HalfFinding\Services\HalfFindingService createHalfFinding(array $args = [])
 * @method \DTS\eBaySDK\Inventory\Services\InventoryService createInventory(array $args = [])
 * @method \DTS\eBaySDK\Marketing\Services\MarketingService createMarketing(array $args = [])
 * @method \DTS\eBaySDK\Merchandising\Services\MerchandisingService createMerchandising(array $args = [])
 * @method \DTS\eBaySDK\Metadata\Services\MetadataService createMetadata(array $args = [])
 * @method \DTS\eBaySDK\Order\Services\OrderService createOrder(array $args = [])
 * @method \DTS\eBaySDK\PostOrder\Services\PostOrderService createPostOrder(array $args = [])
 * @method \DTS\eBaySDK\Product\Services\ProductService createProduct(array $args = [])
 * @method \DTS\eBaySDK\ProductMetadata\Services\ProductMetadataService createProductMetadata(array $args = [])
 * @method \DTS\eBaySDK\RelatedItemsManagement\Services\RelatedItemsManagementService createRelatedItemsManagement(array $args = [])
 * @method \DTS\eBaySDK\ResolutionCaseManagement\Services\ResolutionCaseManagementService createResolutionCaseManagement(array $args = [])
 * @method \DTS\eBaySDK\ReturnManagement\Services\ReturnManagementService createReturnManagement(array $args = [])
 * @method \DTS\eBaySDK\Shopping\Services\ShoppingService createShopping(array $args = [])
 * @method \DTS\eBaySDK\Trading\Services\TradingService createTrading(array $args = [])
 */
class Sdk
{
    const VERSION = '18.0.0';

    /**
     * @var bool Controls if the SDK should enforce strict types
     * when values are assigned to property classes.
     */
    public static $STRICT_PROPERTY_TYPES = true;

    /**
     * @var array Configuration options for all services.
     */
    private $config;

    /**
     * @param array $config Configuration option values for all services.
     */
    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    /**
     * @param string $name The method name.
     * @param array $args Arguments that will be passed to the method.
     *
     * @return \DTS\eBaySDK\Services\BaseService
     * @throws \BadMethodCallException
     */
    public function __call($name, array $args)
    {
        if (strpos($name, 'create') === 0) {
            return $this->createService(
                substr($name, 6),
                isset($args[0]) ? $args[0] : []
            );
        }

        throw new \BadMethodCallException("Unknown method: {$name}.");
    }

    /**
     * Create a service object by namespace. Service is configured using array of options.
     *
     * @param string $namespace Service namespace (e.g. Finding, Trading).
     * @param array  $config Configuration options for the service.
     *
     * @return \DTS\eBaySDK\Services\BaseService
     **/
    public function createService($namespace, array $config = [])
    {
        $configuration = $this->config;

        if (isset($this->config[$namespace])) {
            $configuration = arrayMergeDeep($configuration, $this->config[$namespace]);
        }

        $configuration = arrayMergeDeep($configuration, $config);

        $service = "DTS\\eBaySDK\\{$namespace}\\Services\\{$namespace}Service";

        return new $service($configuration);
    }
}
