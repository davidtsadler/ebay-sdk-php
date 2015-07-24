<?php

use DTS\eBaySDK\Trading\Enums\ListingTypeCodeType;

class ListingTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ListingTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ListingTypeCodeType', $this->obj);
    }
}
