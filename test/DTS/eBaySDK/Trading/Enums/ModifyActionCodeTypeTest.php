<?php

use DTS\eBaySDK\Trading\Enums\ModifyActionCodeType;

class ModifyActionCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ModifyActionCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ModifyActionCodeType', $this->obj);
    }
}
