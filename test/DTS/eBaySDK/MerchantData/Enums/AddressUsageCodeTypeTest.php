<?php

use DTS\eBaySDK\MerchantData\Enums\AddressUsageCodeType;

class AddressUsageCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AddressUsageCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\AddressUsageCodeType', $this->obj);
    }
}
