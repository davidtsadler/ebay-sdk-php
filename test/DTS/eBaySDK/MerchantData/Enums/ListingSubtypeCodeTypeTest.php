<?php

use DTS\eBaySDK\MerchantData\Enums\ListingSubtypeCodeType;

class ListingSubtypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ListingSubtypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\ListingSubtypeCodeType', $this->obj);
    }
}
