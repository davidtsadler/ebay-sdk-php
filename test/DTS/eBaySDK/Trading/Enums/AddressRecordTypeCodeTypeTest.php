<?php

use DTS\eBaySDK\Trading\Enums\AddressRecordTypeCodeType;

class AddressRecordTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AddressRecordTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\AddressRecordTypeCodeType', $this->obj);
    }
}
