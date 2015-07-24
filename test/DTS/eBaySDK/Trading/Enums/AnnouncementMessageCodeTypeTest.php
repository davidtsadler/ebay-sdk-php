<?php

use DTS\eBaySDK\Trading\Enums\AnnouncementMessageCodeType;

class AnnouncementMessageCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AnnouncementMessageCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\AnnouncementMessageCodeType', $this->obj);
    }
}
