<?php

use DTS\eBaySDK\BusinessPoliciesManagement\Enums\ShippingRateType;

class ShippingRateTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ShippingRateType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BusinessPoliciesManagement\Enums\ShippingRateType', $this->obj);
    }
}
