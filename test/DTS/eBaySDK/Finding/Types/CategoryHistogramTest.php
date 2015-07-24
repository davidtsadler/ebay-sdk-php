<?php

use DTS\eBaySDK\Finding\Types\CategoryHistogram;

class CategoryHistogramTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CategoryHistogram();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Types\CategoryHistogram', $this->obj);
    }

    public function testExtendsCategory()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Types\Category', $this->obj);
    }
}
