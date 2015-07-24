<?php

use DTS\eBaySDK\Trading\Enums\SellingManagerInventoryPropertyTypeCodeType;

class SellingManagerInventoryPropertyTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SellingManagerInventoryPropertyTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SellingManagerInventoryPropertyTypeCodeType', $this->obj);
    }
}
