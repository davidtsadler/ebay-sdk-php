<?php

use DTS\eBaySDK\Trading\Types\DeleteSellingManagerTemplateAutomationRuleRequestType;

class DeleteSellingManagerTemplateAutomationRuleRequestTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DeleteSellingManagerTemplateAutomationRuleRequestType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\DeleteSellingManagerTemplateAutomationRuleRequestType', $this->obj);
    }

    public function testExtendsAbstractRequestType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\AbstractRequestType', $this->obj);
    }
}
