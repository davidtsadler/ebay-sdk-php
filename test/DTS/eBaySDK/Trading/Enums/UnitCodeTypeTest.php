<?php

use DTS\eBaySDK\Trading\Enums\UnitCodeType;

class UnitCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new UnitCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\UnitCodeType', $this->obj);
    }
}
