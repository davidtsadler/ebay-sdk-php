<?php

use DTS\eBaySDK\MerchantData\Enums\AddressAttributeCodeType;

class AddressAttributeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AddressAttributeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\AddressAttributeCodeType', $this->obj);
    }
}
