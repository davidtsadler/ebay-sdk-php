<?php

use DTS\eBaySDK\Trading\Enums\StoreSubscriptionLevelCodeType;

class StoreSubscriptionLevelCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new StoreSubscriptionLevelCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\StoreSubscriptionLevelCodeType', $this->obj);
    }
}
