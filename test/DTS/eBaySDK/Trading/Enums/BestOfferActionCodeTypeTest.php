<?php

use DTS\eBaySDK\Trading\Enums\BestOfferActionCodeType;

class BestOfferActionCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BestOfferActionCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\BestOfferActionCodeType', $this->obj);
    }
}
