<?php

use DTS\eBaySDK\Trading\Enums\SummaryWindowPeriodCodeType;

class SummaryWindowPeriodCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SummaryWindowPeriodCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SummaryWindowPeriodCodeType', $this->obj);
    }
}
