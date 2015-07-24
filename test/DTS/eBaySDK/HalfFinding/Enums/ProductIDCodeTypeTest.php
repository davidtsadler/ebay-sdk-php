<?php

use DTS\eBaySDK\HalfFinding\Enums\ProductIDCodeType;

class ProductIDCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ProductIDCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\HalfFinding\Enums\ProductIDCodeType', $this->obj);
    }
}
