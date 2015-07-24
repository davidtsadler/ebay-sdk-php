<?php

use DTS\eBaySDK\Trading\Enums\SummaryFrequencyCodeType;

class SummaryFrequencyCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SummaryFrequencyCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SummaryFrequencyCodeType', $this->obj);
    }
}
