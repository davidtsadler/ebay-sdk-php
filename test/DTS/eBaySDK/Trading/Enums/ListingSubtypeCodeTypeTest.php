<?php

use DTS\eBaySDK\Trading\Enums\ListingSubtypeCodeType;

class ListingSubtypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ListingSubtypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ListingSubtypeCodeType', $this->obj);
    }
}
