<?php

use DTS\eBaySDK\Trading\Enums\SortOrderCodeType;

class SortOrderCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SortOrderCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SortOrderCodeType', $this->obj);
    }
}
