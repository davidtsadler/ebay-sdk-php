<?php

use DTS\eBaySDK\Trading\Enums\EndOfAuctionLogoTypeCodeType;

class EndOfAuctionLogoTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new EndOfAuctionLogoTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\EndOfAuctionLogoTypeCodeType', $this->obj);
    }
}
