<?php

use DTS\eBaySDK\Trading\Enums\DisputeRecordTypeCodeType;

class DisputeRecordTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DisputeRecordTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\DisputeRecordTypeCodeType', $this->obj);
    }
}
