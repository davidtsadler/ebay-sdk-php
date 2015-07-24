<?php

use DTS\eBaySDK\MerchantData\Enums\ShipmentDeliveryStatusCodeType;

class ShipmentDeliveryStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ShipmentDeliveryStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\ShipmentDeliveryStatusCodeType', $this->obj);
    }
}
