<?php

use DTS\eBaySDK\Trading\Enums\ItemFormatSortFilterCodeType;

class ItemFormatSortFilterCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ItemFormatSortFilterCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ItemFormatSortFilterCodeType', $this->obj);
    }
}
