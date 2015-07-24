<?php

use DTS\eBaySDK\Trading\Enums\TradingRoleCodeType;

class TradingRoleCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new TradingRoleCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\TradingRoleCodeType', $this->obj);
    }
}
