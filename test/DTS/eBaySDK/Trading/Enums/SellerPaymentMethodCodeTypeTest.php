<?php

use DTS\eBaySDK\Trading\Enums\SellerPaymentMethodCodeType;

class SellerPaymentMethodCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SellerPaymentMethodCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SellerPaymentMethodCodeType', $this->obj);
    }
}
