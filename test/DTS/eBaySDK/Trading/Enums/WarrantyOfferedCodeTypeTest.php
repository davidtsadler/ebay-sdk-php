<?php

use DTS\eBaySDK\Trading\Enums\WarrantyOfferedCodeType;

class WarrantyOfferedCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new WarrantyOfferedCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\WarrantyOfferedCodeType', $this->obj);
    }
}
