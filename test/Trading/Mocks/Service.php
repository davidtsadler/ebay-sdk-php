<?php
namespace DTS\eBaySDK\Test\Trading\Mocks;

use DTS\eBaySDK\Trading\Types\GeteBayOfficialTimeRequestType;

class Service extends \DTS\eBaySDK\Trading\Services\TradingBaseService
{
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function testOperation()
    {
        return $this->callOperationAsync(
            'testOperation',
            new GeteBayOfficialTimeRequestType(),
            '\DTS\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }
}
