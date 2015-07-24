<?php

use DTS\eBaySDK\Trading\Enums\InventoryTrackingMethodCodeType;

class InventoryTrackingMethodCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new InventoryTrackingMethodCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\InventoryTrackingMethodCodeType', $this->obj);
    }
}
