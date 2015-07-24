<?php

use DTS\eBaySDK\Trading\Types\CombinedFixedPriceTreatmentEnabledDefinitionType;

class CombinedFixedPriceTreatmentEnabledDefinitionTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CombinedFixedPriceTreatmentEnabledDefinitionType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\CombinedFixedPriceTreatmentEnabledDefinitionType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
