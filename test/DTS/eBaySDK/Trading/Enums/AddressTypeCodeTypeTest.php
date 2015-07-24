<?php

use DTS\eBaySDK\Trading\Enums\AddressTypeCodeType;

class AddressTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AddressTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\AddressTypeCodeType', $this->obj);
    }
}
