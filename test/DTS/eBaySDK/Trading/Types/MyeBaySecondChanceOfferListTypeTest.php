<?php

use DTS\eBaySDK\Trading\Types\MyeBaySecondChanceOfferListType;

class MyeBaySecondChanceOfferListTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new MyeBaySecondChanceOfferListType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\MyeBaySecondChanceOfferListType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
