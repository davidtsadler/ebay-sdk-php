<?php

use DTS\eBaySDK\Trading\Enums\PayPalAccountTypeCodeType;

class PayPalAccountTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PayPalAccountTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\PayPalAccountTypeCodeType', $this->obj);
    }
}
