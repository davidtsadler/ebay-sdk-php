<?php

use DTS\eBaySDK\Trading\Enums\ShippingRegionCodeType;

class ShippingRegionCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ShippingRegionCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ShippingRegionCodeType', $this->obj);
    }
}
