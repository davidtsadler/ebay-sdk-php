<?php

use DTS\eBaySDK\Trading\Enums\PhotoDisplayCodeType;

class PhotoDisplayCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PhotoDisplayCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\PhotoDisplayCodeType', $this->obj);
    }
}
