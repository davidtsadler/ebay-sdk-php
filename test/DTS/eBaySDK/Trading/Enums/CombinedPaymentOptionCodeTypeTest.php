<?php

use DTS\eBaySDK\Trading\Enums\CombinedPaymentOptionCodeType;

class CombinedPaymentOptionCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CombinedPaymentOptionCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\CombinedPaymentOptionCodeType', $this->obj);
    }
}
