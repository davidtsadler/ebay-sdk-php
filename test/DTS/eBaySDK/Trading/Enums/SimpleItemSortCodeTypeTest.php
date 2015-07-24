<?php

use DTS\eBaySDK\Trading\Enums\SimpleItemSortCodeType;

class SimpleItemSortCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SimpleItemSortCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SimpleItemSortCodeType', $this->obj);
    }
}
