<?php

use DTS\eBaySDK\MerchantData\Enums\ListingEnhancementsCodeType;

class ListingEnhancementsCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ListingEnhancementsCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\ListingEnhancementsCodeType', $this->obj);
    }
}
