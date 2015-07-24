<?php

use DTS\eBaySDK\MerchantData\Enums\PaymentTransactionStatusCodeType;

class PaymentTransactionStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PaymentTransactionStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\PaymentTransactionStatusCodeType', $this->obj);
    }
}
