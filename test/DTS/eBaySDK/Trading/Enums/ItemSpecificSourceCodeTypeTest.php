<?php

use DTS\eBaySDK\Trading\Enums\ItemSpecificSourceCodeType;

class ItemSpecificSourceCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ItemSpecificSourceCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ItemSpecificSourceCodeType', $this->obj);
    }
}
