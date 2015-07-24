<?php

use DTS\eBaySDK\Trading\Enums\PayPalAccountLevelCodeType;

class PayPalAccountLevelCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PayPalAccountLevelCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\PayPalAccountLevelCodeType', $this->obj);
    }
}
