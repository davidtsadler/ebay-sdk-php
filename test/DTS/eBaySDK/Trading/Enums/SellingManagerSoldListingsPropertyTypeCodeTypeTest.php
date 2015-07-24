<?php

use DTS\eBaySDK\Trading\Enums\SellingManagerSoldListingsPropertyTypeCodeType;

class SellingManagerSoldListingsPropertyTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SellingManagerSoldListingsPropertyTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SellingManagerSoldListingsPropertyTypeCodeType', $this->obj);
    }
}
