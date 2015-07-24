<?php

use DTS\eBaySDK\Trading\Enums\PerformanceStatusCodeType;

class PerformanceStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PerformanceStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\PerformanceStatusCodeType', $this->obj);
    }
}
