<?php

use DTS\eBaySDK\Trading\Enums\AddressStatusCodeType;

class AddressStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AddressStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\AddressStatusCodeType', $this->obj);
    }
}
