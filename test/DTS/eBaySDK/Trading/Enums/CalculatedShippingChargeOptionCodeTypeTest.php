<?php

use DTS\eBaySDK\Trading\Enums\CalculatedShippingChargeOptionCodeType;

class CalculatedShippingChargeOptionCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CalculatedShippingChargeOptionCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\CalculatedShippingChargeOptionCodeType', $this->obj);
    }
}
