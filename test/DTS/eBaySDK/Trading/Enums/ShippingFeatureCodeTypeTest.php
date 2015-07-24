<?php

use DTS\eBaySDK\Trading\Enums\ShippingFeatureCodeType;

class ShippingFeatureCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ShippingFeatureCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ShippingFeatureCodeType', $this->obj);
    }
}
