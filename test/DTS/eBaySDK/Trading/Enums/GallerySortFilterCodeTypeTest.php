<?php

use DTS\eBaySDK\Trading\Enums\GallerySortFilterCodeType;

class GallerySortFilterCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GallerySortFilterCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\GallerySortFilterCodeType', $this->obj);
    }
}
