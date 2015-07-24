<?php

use DTS\eBaySDK\Trading\Enums\ValueFormatCodeType;

class ValueFormatCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ValueFormatCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ValueFormatCodeType', $this->obj);
    }
}
