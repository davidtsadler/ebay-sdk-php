<?php

use DTS\eBaySDK\Trading\Types\AddMemberMessageAAQToPartnerRequestType;

class AddMemberMessageAAQToPartnerRequestTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AddMemberMessageAAQToPartnerRequestType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\AddMemberMessageAAQToPartnerRequestType', $this->obj);
    }

    public function testExtendsAbstractRequestType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\AbstractRequestType', $this->obj);
    }
}
