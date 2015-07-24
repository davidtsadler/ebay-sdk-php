<?php

use DTS\eBaySDK\MerchantData\Enums\ShipmentStatusCodeType;

class ShipmentStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ShipmentStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\ShipmentStatusCodeType', $this->obj);
    }
}
