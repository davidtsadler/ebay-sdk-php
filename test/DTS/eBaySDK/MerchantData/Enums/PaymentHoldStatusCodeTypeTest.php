<?php

use DTS\eBaySDK\MerchantData\Enums\PaymentHoldStatusCodeType;

class PaymentHoldStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PaymentHoldStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\PaymentHoldStatusCodeType', $this->obj);
    }
}
