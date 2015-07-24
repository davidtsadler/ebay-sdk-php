<?php

use DTS\eBaySDK\BusinessPoliciesManagement\Types\AdditionalServiceShippingOption;

class AdditionalServiceShippingOptionTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AdditionalServiceShippingOption();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BusinessPoliciesManagement\Types\AdditionalServiceShippingOption', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
