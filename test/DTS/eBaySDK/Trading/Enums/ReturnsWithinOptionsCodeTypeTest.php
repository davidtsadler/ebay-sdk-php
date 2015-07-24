<?php

use DTS\eBaySDK\Trading\Enums\ReturnsWithinOptionsCodeType;

class ReturnsWithinOptionsCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ReturnsWithinOptionsCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ReturnsWithinOptionsCodeType', $this->obj);
    }
}
