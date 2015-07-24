<?php

use DTS\eBaySDK\Trading\Enums\DisputeActivityCodeType;

class DisputeActivityCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DisputeActivityCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\DisputeActivityCodeType', $this->obj);
    }
}
