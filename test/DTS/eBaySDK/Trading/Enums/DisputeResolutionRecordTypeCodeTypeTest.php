<?php

use DTS\eBaySDK\Trading\Enums\DisputeResolutionRecordTypeCodeType;

class DisputeResolutionRecordTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DisputeResolutionRecordTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\DisputeResolutionRecordTypeCodeType', $this->obj);
    }
}
