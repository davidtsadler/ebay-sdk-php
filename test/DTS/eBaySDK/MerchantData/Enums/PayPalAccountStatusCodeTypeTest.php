<?php

use DTS\eBaySDK\MerchantData\Enums\PayPalAccountStatusCodeType;

class PayPalAccountStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PayPalAccountStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\PayPalAccountStatusCodeType', $this->obj);
    }
}
