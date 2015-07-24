<?php

use DTS\eBaySDK\Trading\Enums\WarrantyTypeOptionsCodeType;

class WarrantyTypeOptionsCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new WarrantyTypeOptionsCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\WarrantyTypeOptionsCodeType', $this->obj);
    }
}
