<?php

use DTS\eBaySDK\MerchantData\Enums\BuyerPaymentInstrumentCodeType;

class BuyerPaymentInstrumentCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BuyerPaymentInstrumentCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\BuyerPaymentInstrumentCodeType', $this->obj);
    }
}
