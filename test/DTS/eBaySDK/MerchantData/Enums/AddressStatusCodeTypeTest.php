<?php

use DTS\eBaySDK\MerchantData\Enums\AddressStatusCodeType;

class AddressStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AddressStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\AddressStatusCodeType', $this->obj);
    }
}
