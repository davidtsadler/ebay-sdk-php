<?php

use DTS\eBaySDK\Trading\Enums\CancelInitiatorCodeType;

class CancelInitiatorCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CancelInitiatorCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\CancelInitiatorCodeType', $this->obj);
    }
}
