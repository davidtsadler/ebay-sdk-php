<?php

use DTS\eBaySDK\MerchantData\Enums\ListingStatusCodeType;

class ListingStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ListingStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\ListingStatusCodeType', $this->obj);
    }
}
