<?php

use DTS\eBaySDK\Trading\Types\MaximumUnpaidItemStrikesInfoType;

class MaximumUnpaidItemStrikesInfoTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new MaximumUnpaidItemStrikesInfoType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\MaximumUnpaidItemStrikesInfoType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
