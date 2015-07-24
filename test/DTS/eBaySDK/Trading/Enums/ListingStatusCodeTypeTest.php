<?php

use DTS\eBaySDK\Trading\Enums\ListingStatusCodeType;

class ListingStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ListingStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ListingStatusCodeType', $this->obj);
    }
}
