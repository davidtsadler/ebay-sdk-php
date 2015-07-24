<?php

use DTS\eBaySDK\Trading\Enums\PeriodCodeType;

class PeriodCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PeriodCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\PeriodCodeType', $this->obj);
    }
}
