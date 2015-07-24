<?php

use DTS\eBaySDK\Trading\Enums\FlatRateInsuranceRangeCodeType;

class FlatRateInsuranceRangeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new FlatRateInsuranceRangeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\FlatRateInsuranceRangeCodeType', $this->obj);
    }
}
