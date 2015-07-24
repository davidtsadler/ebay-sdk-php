<?php

use DTS\eBaySDK\Trading\Enums\BidActionCodeType;

class BidActionCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BidActionCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\BidActionCodeType', $this->obj);
    }
}
