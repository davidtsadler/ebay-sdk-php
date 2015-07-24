<?php

use DTS\eBaySDK\Trading\Enums\SellerPIStatusCodeType;

class SellerPIStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SellerPIStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SellerPIStatusCodeType', $this->obj);
    }
}
