<?php

use DTS\eBaySDK\Trading\Enums\ProductCreationEnabledCodeType;

class ProductCreationEnabledCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ProductCreationEnabledCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ProductCreationEnabledCodeType', $this->obj);
    }
}
