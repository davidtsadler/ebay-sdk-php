<?php

use DTS\eBaySDK\Trading\Enums\PaymentStatusCodeType;

class PaymentStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PaymentStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\PaymentStatusCodeType', $this->obj);
    }
}
