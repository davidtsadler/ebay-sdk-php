<?php

use DTS\eBaySDK\Trading\Enums\ItemSortTypeCodeType;

class ItemSortTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ItemSortTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ItemSortTypeCodeType', $this->obj);
    }
}
