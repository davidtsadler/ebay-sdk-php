<?php

use DTS\eBaySDK\Trading\Enums\ShippingRateTypeCodeType;

class ShippingRateTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ShippingRateTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ShippingRateTypeCodeType', $this->obj);
    }
}
