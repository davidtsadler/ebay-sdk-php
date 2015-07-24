<?php

use DTS\eBaySDK\Trading\Types\MaximumUnpaidItemStrikesCountDetailsType;

class MaximumUnpaidItemStrikesCountDetailsTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new MaximumUnpaidItemStrikesCountDetailsType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\MaximumUnpaidItemStrikesCountDetailsType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
