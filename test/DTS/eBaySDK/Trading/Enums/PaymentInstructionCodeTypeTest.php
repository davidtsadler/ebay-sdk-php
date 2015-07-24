<?php

use DTS\eBaySDK\Trading\Enums\PaymentInstructionCodeType;

class PaymentInstructionCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PaymentInstructionCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\PaymentInstructionCodeType', $this->obj);
    }
}
