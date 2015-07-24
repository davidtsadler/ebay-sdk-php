<?php

use DTS\eBaySDK\Trading\Enums\GalleryStatusCodeType;

class GalleryStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GalleryStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\GalleryStatusCodeType', $this->obj);
    }
}
