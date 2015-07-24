<?php

use DTS\eBaySDK\Trading\Enums\StoreCustomListingHeaderDisplayCodeType;

class StoreCustomListingHeaderDisplayCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new StoreCustomListingHeaderDisplayCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\StoreCustomListingHeaderDisplayCodeType', $this->obj);
    }
}
