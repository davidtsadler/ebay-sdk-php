<?php

use DTS\eBaySDK\Finding\Enums\SortOrderType;

class SortOrderTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SortOrderType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Enums\SortOrderType', $this->obj);
    }
}
