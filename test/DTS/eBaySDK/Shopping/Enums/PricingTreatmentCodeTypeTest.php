<?php

use DTS\eBaySDK\Shopping\Enums\PricingTreatmentCodeType;

class PricingTreatmentCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PricingTreatmentCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Enums\PricingTreatmentCodeType', $this->obj);
    }
}
