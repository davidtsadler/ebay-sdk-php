<?php

use DTS\eBaySDK\Trading\Types\SetSellingManagerItemAutomationRuleRequestType;

class SetSellingManagerItemAutomationRuleRequestTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SetSellingManagerItemAutomationRuleRequestType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\SetSellingManagerItemAutomationRuleRequestType', $this->obj);
    }

    public function testExtendsAbstractRequestType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\AbstractRequestType', $this->obj);
    }
}
