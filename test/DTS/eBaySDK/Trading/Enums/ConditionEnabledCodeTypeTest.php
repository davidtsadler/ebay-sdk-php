<?php

use DTS\eBaySDK\Trading\Enums\ConditionEnabledCodeType;

class ConditionEnabledCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ConditionEnabledCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ConditionEnabledCodeType', $this->obj);
    }
}
