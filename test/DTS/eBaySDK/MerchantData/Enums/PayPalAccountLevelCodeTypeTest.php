<?php

use DTS\eBaySDK\MerchantData\Enums\PayPalAccountLevelCodeType;

class PayPalAccountLevelCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PayPalAccountLevelCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\PayPalAccountLevelCodeType', $this->obj);
    }
}
