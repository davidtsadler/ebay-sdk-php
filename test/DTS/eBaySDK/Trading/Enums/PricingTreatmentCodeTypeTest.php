<?php

use DTS\eBaySDK\Trading\Enums\PricingTreatmentCodeType;

class PricingTreatmentCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PricingTreatmentCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\PricingTreatmentCodeType', $this->obj);
    }
}
