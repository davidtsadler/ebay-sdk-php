<?php

use DTS\eBaySDK\Trading\Enums\StoreItemListSortOrderCodeType;

class StoreItemListSortOrderCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new StoreItemListSortOrderCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\StoreItemListSortOrderCodeType', $this->obj);
    }
}
