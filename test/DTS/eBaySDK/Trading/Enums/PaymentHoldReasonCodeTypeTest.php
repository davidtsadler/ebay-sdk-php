<?php

use DTS\eBaySDK\Trading\Enums\PaymentHoldReasonCodeType;

class PaymentHoldReasonCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PaymentHoldReasonCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\PaymentHoldReasonCodeType', $this->obj);
    }
}
