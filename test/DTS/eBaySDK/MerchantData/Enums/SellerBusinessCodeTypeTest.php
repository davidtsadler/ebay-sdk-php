<?php

use DTS\eBaySDK\MerchantData\Enums\SellerBusinessCodeType;

class SellerBusinessCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SellerBusinessCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\SellerBusinessCodeType', $this->obj);
    }
}
