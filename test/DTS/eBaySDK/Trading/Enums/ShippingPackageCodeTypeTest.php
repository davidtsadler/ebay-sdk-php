<?php

use DTS\eBaySDK\Trading\Enums\ShippingPackageCodeType;

class ShippingPackageCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ShippingPackageCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ShippingPackageCodeType', $this->obj);
    }
}
