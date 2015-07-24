<?php

use DTS\eBaySDK\Trading\Enums\PickupStatusCodeType;

class PickupStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PickupStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\PickupStatusCodeType', $this->obj);
    }
}
