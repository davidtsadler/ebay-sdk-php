<?php

use DTS\eBaySDK\MerchantData\Types\SellereBayPaymentProcessConsentCodeType;

class SellereBayPaymentProcessConsentCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SellereBayPaymentProcessConsentCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\SellereBayPaymentProcessConsentCodeType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
