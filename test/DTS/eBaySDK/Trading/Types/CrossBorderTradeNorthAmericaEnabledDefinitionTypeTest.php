<?php

use DTS\eBaySDK\Trading\Types\CrossBorderTradeNorthAmericaEnabledDefinitionType;

class CrossBorderTradeNorthAmericaEnabledDefinitionTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CrossBorderTradeNorthAmericaEnabledDefinitionType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\CrossBorderTradeNorthAmericaEnabledDefinitionType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
