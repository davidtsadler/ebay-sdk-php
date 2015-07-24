<?php

use DTS\eBaySDK\Trading\Enums\ItemSortFilterCodeType;

class ItemSortFilterCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ItemSortFilterCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ItemSortFilterCodeType', $this->obj);
    }
}
