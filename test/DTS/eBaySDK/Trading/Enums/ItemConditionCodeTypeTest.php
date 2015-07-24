<?php

use DTS\eBaySDK\Trading\Enums\ItemConditionCodeType;

class ItemConditionCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ItemConditionCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ItemConditionCodeType', $this->obj);
    }
}
