<?php

use DTS\eBaySDK\Shopping\Enums\ProductSortCodeType;

class ProductSortCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ProductSortCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Enums\ProductSortCodeType', $this->obj);
    }
}
