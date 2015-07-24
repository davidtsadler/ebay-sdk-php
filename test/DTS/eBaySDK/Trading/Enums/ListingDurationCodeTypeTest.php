<?php

use DTS\eBaySDK\Trading\Enums\ListingDurationCodeType;

class ListingDurationCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ListingDurationCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ListingDurationCodeType', $this->obj);
    }
}
