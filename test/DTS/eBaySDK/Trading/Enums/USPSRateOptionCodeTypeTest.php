<?php

use DTS\eBaySDK\Trading\Enums\USPSRateOptionCodeType;

class USPSRateOptionCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new USPSRateOptionCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\USPSRateOptionCodeType', $this->obj);
    }
}
