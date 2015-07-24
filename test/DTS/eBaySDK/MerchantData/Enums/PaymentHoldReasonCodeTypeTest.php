<?php

use DTS\eBaySDK\MerchantData\Enums\PaymentHoldReasonCodeType;

class PaymentHoldReasonCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PaymentHoldReasonCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\PaymentHoldReasonCodeType', $this->obj);
    }
}
