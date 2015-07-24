<?php

use DTS\eBaySDK\MerchantData\Enums\BuyerPaymentMethodCodeType;

class BuyerPaymentMethodCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BuyerPaymentMethodCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\BuyerPaymentMethodCodeType', $this->obj);
    }
}
