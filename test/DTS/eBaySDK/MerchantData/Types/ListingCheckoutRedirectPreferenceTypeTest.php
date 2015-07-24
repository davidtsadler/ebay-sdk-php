<?php

use DTS\eBaySDK\MerchantData\Types\ListingCheckoutRedirectPreferenceType;

class ListingCheckoutRedirectPreferenceTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ListingCheckoutRedirectPreferenceType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\ListingCheckoutRedirectPreferenceType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
