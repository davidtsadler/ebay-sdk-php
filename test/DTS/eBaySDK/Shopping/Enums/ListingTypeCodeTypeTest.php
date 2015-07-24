<?php

use DTS\eBaySDK\Shopping\Enums\ListingTypeCodeType;

class ListingTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ListingTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Enums\ListingTypeCodeType', $this->obj);
    }
}
