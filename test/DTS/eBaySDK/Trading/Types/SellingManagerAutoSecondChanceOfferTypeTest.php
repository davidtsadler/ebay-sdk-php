<?php

use DTS\eBaySDK\Trading\Types\SellingManagerAutoSecondChanceOfferType;

class SellingManagerAutoSecondChanceOfferTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SellingManagerAutoSecondChanceOfferType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\SellingManagerAutoSecondChanceOfferType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
