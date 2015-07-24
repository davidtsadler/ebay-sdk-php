<?php

use DTS\eBaySDK\Trading\Enums\SellerBusinessCodeType;

class SellerBusinessCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SellerBusinessCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SellerBusinessCodeType', $this->obj);
    }
}
