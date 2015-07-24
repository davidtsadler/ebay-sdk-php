<?php

use DTS\eBaySDK\Trading\Enums\PictureSourceCodeType;

class PictureSourceCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PictureSourceCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\PictureSourceCodeType', $this->obj);
    }
}
