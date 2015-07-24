<?php

use DTS\eBaySDK\Trading\Enums\ItemCompatibilityEnabledCodeType;

class ItemCompatibilityEnabledCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ItemCompatibilityEnabledCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ItemCompatibilityEnabledCodeType', $this->obj);
    }
}
