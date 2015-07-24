<?php

use DTS\eBaySDK\Trading\Enums\ShippingCostPaidByOptionsCodeType;

class ShippingCostPaidByOptionsCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ShippingCostPaidByOptionsCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ShippingCostPaidByOptionsCodeType', $this->obj);
    }
}
