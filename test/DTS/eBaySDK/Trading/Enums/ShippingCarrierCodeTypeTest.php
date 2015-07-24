<?php

use DTS\eBaySDK\Trading\Enums\ShippingCarrierCodeType;

class ShippingCarrierCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ShippingCarrierCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ShippingCarrierCodeType', $this->obj);
    }
}
