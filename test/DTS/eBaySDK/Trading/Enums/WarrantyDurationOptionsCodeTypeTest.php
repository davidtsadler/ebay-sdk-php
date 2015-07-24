<?php

use DTS\eBaySDK\Trading\Enums\WarrantyDurationOptionsCodeType;

class WarrantyDurationOptionsCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new WarrantyDurationOptionsCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\WarrantyDurationOptionsCodeType', $this->obj);
    }
}
