<?php

use DTS\eBaySDK\Trading\Types\Group3MaxFlatShippingCostDefinitionType;

class Group3MaxFlatShippingCostDefinitionTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new Group3MaxFlatShippingCostDefinitionType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\Group3MaxFlatShippingCostDefinitionType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
