<?php

use DTS\eBaySDK\Trading\Types\Group2MaxFlatShippingCostDefinitionType;

class Group2MaxFlatShippingCostDefinitionTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new Group2MaxFlatShippingCostDefinitionType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\Group2MaxFlatShippingCostDefinitionType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
