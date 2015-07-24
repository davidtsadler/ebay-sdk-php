<?php

use DTS\eBaySDK\Trading\Enums\URLTypeCodeType;

class URLTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new URLTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\URLTypeCodeType', $this->obj);
    }
}
