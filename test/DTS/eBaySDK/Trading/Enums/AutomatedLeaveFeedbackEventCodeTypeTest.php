<?php

use DTS\eBaySDK\Trading\Enums\AutomatedLeaveFeedbackEventCodeType;

class AutomatedLeaveFeedbackEventCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AutomatedLeaveFeedbackEventCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\AutomatedLeaveFeedbackEventCodeType', $this->obj);
    }
}
