<?php

use DTS\eBaySDK\MerchantData\Enums\PricingTreatmentCodeType;

class PricingTreatmentCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PricingTreatmentCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\PricingTreatmentCodeType', $this->obj);
    }
}
