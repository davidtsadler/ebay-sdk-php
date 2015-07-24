<?php

use DTS\eBaySDK\Trading\Enums\PaymentTransactionStatusCodeType;

class PaymentTransactionStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PaymentTransactionStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\PaymentTransactionStatusCodeType', $this->obj);
    }
}
