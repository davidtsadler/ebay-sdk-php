<?php

use DTS\eBaySDK\Trading\Enums\CalculatedShippingRateOptionCodeType;

class CalculatedShippingRateOptionCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CalculatedShippingRateOptionCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\CalculatedShippingRateOptionCodeType', $this->obj);
    }
}
