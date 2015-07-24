<?php

use DTS\eBaySDK\Trading\Enums\PaymentMethodSearchCodeType;

class PaymentMethodSearchCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PaymentMethodSearchCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\PaymentMethodSearchCodeType', $this->obj);
    }
}
