<?php

use DTS\eBaySDK\Trading\Enums\GalleryTypeCodeType;

class GalleryTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GalleryTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\GalleryTypeCodeType', $this->obj);
    }
}
