<?php

use DTS\eBaySDK\Trading\Types\ListingDurationReferenceType;

class ListingDurationReferenceTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ListingDurationReferenceType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\ListingDurationReferenceType', $this->obj);
    }

    public function testExtendsIntegerType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\IntegerType', $this->obj);
    }
}
