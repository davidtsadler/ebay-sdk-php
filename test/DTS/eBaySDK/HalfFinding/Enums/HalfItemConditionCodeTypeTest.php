<?php

use DTS\eBaySDK\HalfFinding\Enums\HalfItemConditionCodeType;

class HalfItemConditionCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new HalfItemConditionCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\HalfFinding\Enums\HalfItemConditionCodeType', $this->obj);
    }
}
