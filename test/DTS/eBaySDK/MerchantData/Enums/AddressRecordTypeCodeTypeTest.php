<?php

use DTS\eBaySDK\MerchantData\Enums\AddressRecordTypeCodeType;

class AddressRecordTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AddressRecordTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\AddressRecordTypeCodeType', $this->obj);
    }
}
