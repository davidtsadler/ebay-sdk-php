<?php

use DTS\eBaySDK\Trading\Enums\AddressOwnerCodeType;

class AddressOwnerCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AddressOwnerCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\AddressOwnerCodeType', $this->obj);
    }
}
