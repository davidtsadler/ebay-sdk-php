<?php

use DTS\eBaySDK\HalfFinding\Enums\ItemFilterType;

class ItemFilterTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ItemFilterType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\HalfFinding\Enums\ItemFilterType', $this->obj);
    }
}
