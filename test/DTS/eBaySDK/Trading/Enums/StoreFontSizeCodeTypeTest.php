<?php

use DTS\eBaySDK\Trading\Enums\StoreFontSizeCodeType;

class StoreFontSizeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new StoreFontSizeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\StoreFontSizeCodeType', $this->obj);
    }
}
