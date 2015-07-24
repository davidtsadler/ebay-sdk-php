<?php

use DTS\eBaySDK\Trading\Enums\FeedbackSummaryPeriodCodeType;

class FeedbackSummaryPeriodCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new FeedbackSummaryPeriodCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\FeedbackSummaryPeriodCodeType', $this->obj);
    }
}
