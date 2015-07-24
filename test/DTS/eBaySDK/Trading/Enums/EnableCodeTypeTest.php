<?php

use DTS\eBaySDK\Trading\Enums\EnableCodeType;

class EnableCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new EnableCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\EnableCodeType', $this->obj);
    }
}
