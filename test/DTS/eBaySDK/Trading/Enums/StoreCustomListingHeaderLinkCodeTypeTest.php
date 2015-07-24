<?php

use DTS\eBaySDK\Trading\Enums\StoreCustomListingHeaderLinkCodeType;

class StoreCustomListingHeaderLinkCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new StoreCustomListingHeaderLinkCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\StoreCustomListingHeaderLinkCodeType', $this->obj);
    }
}
