<?php

use DTS\eBaySDK\Trading\Enums\ShippingServiceType;

class ShippingServiceTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ShippingServiceType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ShippingServiceType', $this->obj);
    }
}
