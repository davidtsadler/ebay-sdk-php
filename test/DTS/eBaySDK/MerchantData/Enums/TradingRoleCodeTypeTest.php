<?php

use DTS\eBaySDK\MerchantData\Enums\TradingRoleCodeType;

class TradingRoleCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new TradingRoleCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\TradingRoleCodeType', $this->obj);
    }
}
