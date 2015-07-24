<?php

use DTS\eBaySDK\MerchantData\Enums\CharitySellerStatusCodeType;

class CharitySellerStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CharitySellerStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\CharitySellerStatusCodeType', $this->obj);
    }
}
