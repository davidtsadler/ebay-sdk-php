<?php

use DTS\eBaySDK\Finding\Types\GalleryURL;

class GalleryURLTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GalleryURL();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Types\GalleryURL', $this->obj);
    }

    public function testExtendsURIType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\URIType', $this->obj);
    }
}
