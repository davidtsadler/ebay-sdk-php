<?php

use DTS\eBaySDK\Trading\Enums\SocialAddressTypeCodeType;

class SocialAddressTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SocialAddressTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SocialAddressTypeCodeType', $this->obj);
    }
}
