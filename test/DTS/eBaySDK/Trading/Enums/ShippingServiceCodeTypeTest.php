<?php

use DTS\eBaySDK\Trading\Enums\ShippingServiceCodeType;

class ShippingServiceCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ShippingServiceCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ShippingServiceCodeType', $this->obj);
    }
}
