<?php

use DTS\eBaySDK\MerchantData\Enums\BuyerProtectionSourceCodeType;

class BuyerProtectionSourceCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BuyerProtectionSourceCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\BuyerProtectionSourceCodeType', $this->obj);
    }
}
