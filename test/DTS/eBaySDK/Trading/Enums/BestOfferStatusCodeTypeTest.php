<?php

use DTS\eBaySDK\Trading\Enums\BestOfferStatusCodeType;

class BestOfferStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BestOfferStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\BestOfferStatusCodeType', $this->obj);
    }
}
