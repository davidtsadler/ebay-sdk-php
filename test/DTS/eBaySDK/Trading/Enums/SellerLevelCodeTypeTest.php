<?php

use DTS\eBaySDK\Trading\Enums\SellerLevelCodeType;

class SellerLevelCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SellerLevelCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SellerLevelCodeType', $this->obj);
    }
}
