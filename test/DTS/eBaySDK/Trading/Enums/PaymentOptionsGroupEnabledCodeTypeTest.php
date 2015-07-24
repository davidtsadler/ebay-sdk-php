<?php

use DTS\eBaySDK\Trading\Enums\PaymentOptionsGroupEnabledCodeType;

class PaymentOptionsGroupEnabledCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PaymentOptionsGroupEnabledCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\PaymentOptionsGroupEnabledCodeType', $this->obj);
    }
}
