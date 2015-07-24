<?php

use DTS\eBaySDK\Trading\Enums\ItemTypeCodeType;

class ItemTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ItemTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ItemTypeCodeType', $this->obj);
    }
}
