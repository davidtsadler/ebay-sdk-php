<?php

use DTS\eBaySDK\Trading\Enums\SkypeContactOptionCodeType;

class SkypeContactOptionCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SkypeContactOptionCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SkypeContactOptionCodeType', $this->obj);
    }
}
