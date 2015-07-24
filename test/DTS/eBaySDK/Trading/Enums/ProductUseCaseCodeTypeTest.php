<?php

use DTS\eBaySDK\Trading\Enums\ProductUseCaseCodeType;

class ProductUseCaseCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ProductUseCaseCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ProductUseCaseCodeType', $this->obj);
    }
}
