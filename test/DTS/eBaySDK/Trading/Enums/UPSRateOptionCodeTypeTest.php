<?php

use DTS\eBaySDK\Trading\Enums\UPSRateOptionCodeType;

class UPSRateOptionCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new UPSRateOptionCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\UPSRateOptionCodeType', $this->obj);
    }
}
