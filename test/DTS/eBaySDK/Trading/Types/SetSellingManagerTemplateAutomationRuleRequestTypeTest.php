<?php

use DTS\eBaySDK\Trading\Types\SetSellingManagerTemplateAutomationRuleRequestType;

class SetSellingManagerTemplateAutomationRuleRequestTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SetSellingManagerTemplateAutomationRuleRequestType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\SetSellingManagerTemplateAutomationRuleRequestType', $this->obj);
    }

    public function testExtendsAbstractRequestType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\AbstractRequestType', $this->obj);
    }
}
