<?php

use DTS\eBaySDK\Trading\Enums\BuyerPaymentInstrumentCodeType;

class BuyerPaymentInstrumentCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BuyerPaymentInstrumentCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\BuyerPaymentInstrumentCodeType', $this->obj);
    }
}
