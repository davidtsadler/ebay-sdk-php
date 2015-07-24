<?php

use DTS\eBaySDK\Trading\Enums\SellingManagerSoldListingsSortTypeCodeType;

class SellingManagerSoldListingsSortTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SellingManagerSoldListingsSortTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SellingManagerSoldListingsSortTypeCodeType', $this->obj);
    }
}
