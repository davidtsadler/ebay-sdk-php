<?php

use DTS\eBaySDK\Trading\Enums\PickupMethodCodeType;

class PickupMethodCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PickupMethodCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\PickupMethodCodeType', $this->obj);
    }
}
