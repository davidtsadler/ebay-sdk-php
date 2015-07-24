<?php

use DTS\eBaySDK\Shopping\Enums\HalfItemConditionCodeType;

class HalfItemConditionCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new HalfItemConditionCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Enums\HalfItemConditionCodeType', $this->obj);
    }
}
