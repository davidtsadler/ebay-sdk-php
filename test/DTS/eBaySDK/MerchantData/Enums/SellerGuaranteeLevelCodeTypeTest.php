<?php

use DTS\eBaySDK\MerchantData\Enums\SellerGuaranteeLevelCodeType;

class SellerGuaranteeLevelCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SellerGuaranteeLevelCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\SellerGuaranteeLevelCodeType', $this->obj);
    }
}
