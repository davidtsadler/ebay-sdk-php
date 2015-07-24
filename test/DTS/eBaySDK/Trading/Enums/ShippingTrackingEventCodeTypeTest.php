<?php

use DTS\eBaySDK\Trading\Enums\ShippingTrackingEventCodeType;

class ShippingTrackingEventCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ShippingTrackingEventCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ShippingTrackingEventCodeType', $this->obj);
    }
}
