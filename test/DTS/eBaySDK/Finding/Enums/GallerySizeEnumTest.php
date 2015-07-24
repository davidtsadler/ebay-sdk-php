<?php

use DTS\eBaySDK\Finding\Enums\GallerySizeEnum;

class GallerySizeEnumTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GallerySizeEnum();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Enums\GallerySizeEnum', $this->obj);
    }
}
