<?php

use DTS\eBaySDK\MerchantData\Enums\AddressRegistrationTypeCodeType;

class AddressRegistrationTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AddressRegistrationTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\AddressRegistrationTypeCodeType', $this->obj);
    }
}
