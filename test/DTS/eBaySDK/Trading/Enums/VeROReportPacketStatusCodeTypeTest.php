<?php

use DTS\eBaySDK\Trading\Enums\VeROReportPacketStatusCodeType;

class VeROReportPacketStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new VeROReportPacketStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\VeROReportPacketStatusCodeType', $this->obj);
    }
}
