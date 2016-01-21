<?php
namespace DTS\eBaySDK;

/**
 * Builds DTS\eBaySDK services based on passed configuration options.
 *
 * @method \DTS\eBaySDK\BulkDataExchange\Services\BulkDataExchangeService createBulkDataExchange(array $args = [])
 * @method \DTS\eBaySDK\BusinessPoliciesManagement\Services\BusinessPoliciesManagementService createBusinessPoliciesManagement(array $args = [])
 * @method \DTS\eBaySDK\FileTransfer\Services\FileTransferService createFileTransfer(array $args = [])
 * @method \DTS\eBaySDK\Finding\Services\FindingService createFinding(array $args = [])
 * @method \DTS\eBaySDK\HalfFinding\Services\HalfFindingService createHalfFinding(array $args = [])
 * @method \DTS\eBaySDK\ResolutionCaseManagement\Services\ResolutionCaseManagementService createResolutionCaseManagement(array $args = [])
 * @method \DTS\eBaySDK\Shopping\Services\ShoppingService createShopping(array $args = [])
 * @method \DTS\eBaySDK\Trading\Services\TradingService createTrading(array $args = [])
 */
class Sdk
{
    const VERSION = '1.0.0-beta';

    static $STRICT_PROPERTY_TYPES = true;

    /** @var array Configuration options for all services. */
    private $config;

    public function __construct(array $config  = [])
    {
        $this->config = $config;
    }

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
     * @param array  $config    Configuration options for the service.
     *
     * @return \DTS\eBaySDK\Services\BaseService
     **/
    public function createService($namespace, array $config  = [])
    {
        $configuration = $this->config;

        if (isset($this->config[$namespace])) {
            $configuration = array_merge_deep($configuration, $this->config[$namespace]);
        }

        $configuration = array_merge_deep($configuration, $config);

        $service = "DTS\\eBaySDK\\{$namespace}\\Services\\{$namespace}Service";

        return new $service($configuration);
    }
}

