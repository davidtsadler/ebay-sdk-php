<?php

use DTS\eBaySDK\MerchantData\Enums\BuyerProtectionCodeType;

class BuyerProtectionCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BuyerProtectionCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\BuyerProtectionCodeType', $this->obj);
    }
}
