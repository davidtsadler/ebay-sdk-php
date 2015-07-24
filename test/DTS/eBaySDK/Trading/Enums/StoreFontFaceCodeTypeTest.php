<?php

use DTS\eBaySDK\Trading\Enums\StoreFontFaceCodeType;

class StoreFontFaceCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new StoreFontFaceCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\StoreFontFaceCodeType', $this->obj);
    }
}
