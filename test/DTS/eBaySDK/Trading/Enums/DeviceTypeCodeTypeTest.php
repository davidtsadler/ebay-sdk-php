<?php

use DTS\eBaySDK\Trading\Enums\DeviceTypeCodeType;

class DeviceTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DeviceTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\DeviceTypeCodeType', $this->obj);
    }
}
