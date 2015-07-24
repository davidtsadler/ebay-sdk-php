<?php

use DTS\eBaySDK\Trading\Enums\PictureFormatCodeType;

class PictureFormatCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PictureFormatCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\PictureFormatCodeType', $this->obj);
    }
}
