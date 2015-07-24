<?php

use DTS\eBaySDK\Trading\Enums\DisplayPayNowButtonCodeType;

class DisplayPayNowButtonCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DisplayPayNowButtonCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\DisplayPayNowButtonCodeType', $this->obj);
    }
}
