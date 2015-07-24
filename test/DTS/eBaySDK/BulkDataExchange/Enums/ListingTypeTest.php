<?php

use DTS\eBaySDK\BulkDataExchange\Enums\ListingType;

class ListingTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ListingType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Enums\ListingType', $this->obj);
    }
}
