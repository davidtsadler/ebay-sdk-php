<?php

use DTS\eBaySDK\Shopping\Enums\ShippingTypeCodeType;

class ShippingTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ShippingTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Enums\ShippingTypeCodeType', $this->obj);
    }
}
