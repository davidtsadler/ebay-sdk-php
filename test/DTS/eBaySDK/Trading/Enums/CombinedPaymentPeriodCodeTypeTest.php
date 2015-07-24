<?php

use DTS\eBaySDK\Trading\Enums\CombinedPaymentPeriodCodeType;

class CombinedPaymentPeriodCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CombinedPaymentPeriodCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\CombinedPaymentPeriodCodeType', $this->obj);
    }
}
