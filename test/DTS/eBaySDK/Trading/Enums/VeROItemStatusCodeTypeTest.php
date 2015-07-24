<?php

use DTS\eBaySDK\Trading\Enums\VeROItemStatusCodeType;

class VeROItemStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new VeROItemStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\VeROItemStatusCodeType', $this->obj);
    }
}
