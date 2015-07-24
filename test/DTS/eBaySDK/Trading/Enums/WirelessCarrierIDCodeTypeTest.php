<?php

use DTS\eBaySDK\Trading\Enums\WirelessCarrierIDCodeType;

class WirelessCarrierIDCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new WirelessCarrierIDCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\WirelessCarrierIDCodeType', $this->obj);
    }
}
