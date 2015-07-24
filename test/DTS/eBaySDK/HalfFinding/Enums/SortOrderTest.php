<?php

use DTS\eBaySDK\HalfFinding\Enums\SortOrder;

class SortOrderTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SortOrder();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\HalfFinding\Enums\SortOrder', $this->obj);
    }
}
