<?php

use DTS\eBaySDK\Trading\Enums\PaymentTypeCodeType;

class PaymentTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PaymentTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\PaymentTypeCodeType', $this->obj);
    }
}
