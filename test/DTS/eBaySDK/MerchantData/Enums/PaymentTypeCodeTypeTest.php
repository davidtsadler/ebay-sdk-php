<?php

use DTS\eBaySDK\MerchantData\Enums\PaymentTypeCodeType;

class PaymentTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PaymentTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\PaymentTypeCodeType', $this->obj);
    }
}
