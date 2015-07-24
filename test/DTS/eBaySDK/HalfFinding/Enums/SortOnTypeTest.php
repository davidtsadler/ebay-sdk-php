<?php

use DTS\eBaySDK\HalfFinding\Enums\SortOnType;

class SortOnTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SortOnType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\HalfFinding\Enums\SortOnType', $this->obj);
    }
}
