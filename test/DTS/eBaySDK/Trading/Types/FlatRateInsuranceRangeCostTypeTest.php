<?php

use DTS\eBaySDK\Trading\Types\FlatRateInsuranceRangeCostType;

class FlatRateInsuranceRangeCostTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new FlatRateInsuranceRangeCostType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\FlatRateInsuranceRangeCostType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
