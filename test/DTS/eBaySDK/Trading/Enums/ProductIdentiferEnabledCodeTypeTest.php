<?php

use DTS\eBaySDK\Trading\Enums\ProductIdentiferEnabledCodeType;

class ProductIdentiferEnabledCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ProductIdentiferEnabledCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ProductIdentiferEnabledCodeType', $this->obj);
    }
}
