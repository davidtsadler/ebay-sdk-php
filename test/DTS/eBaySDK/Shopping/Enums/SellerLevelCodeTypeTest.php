<?php

use DTS\eBaySDK\Shopping\Enums\SellerLevelCodeType;

class SellerLevelCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SellerLevelCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Enums\SellerLevelCodeType', $this->obj);
    }
}
