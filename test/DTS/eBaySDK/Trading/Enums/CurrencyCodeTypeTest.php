<?php

use DTS\eBaySDK\Trading\Enums\CurrencyCodeType;

class CurrencyCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CurrencyCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\CurrencyCodeType', $this->obj);
    }
}
