<?php

use DTS\eBaySDK\MerchantData\Enums\PaymentStatusCodeType;

class PaymentStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PaymentStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\PaymentStatusCodeType', $this->obj);
    }
}
