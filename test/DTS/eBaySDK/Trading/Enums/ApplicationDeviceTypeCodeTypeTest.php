<?php

use DTS\eBaySDK\Trading\Enums\ApplicationDeviceTypeCodeType;

class ApplicationDeviceTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ApplicationDeviceTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ApplicationDeviceTypeCodeType', $this->obj);
    }
}
