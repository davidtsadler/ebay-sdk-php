<?php

use DTS\eBaySDK\Trading\Enums\BuyerPaymentMethodCodeType;

class BuyerPaymentMethodCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BuyerPaymentMethodCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\BuyerPaymentMethodCodeType', $this->obj);
    }
}
