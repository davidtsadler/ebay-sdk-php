<?php

use DTS\eBaySDK\Trading\Enums\ItemSpecificsEnabledCodeType;

class ItemSpecificsEnabledCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ItemSpecificsEnabledCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ItemSpecificsEnabledCodeType', $this->obj);
    }
}
