<?php

use DTS\eBaySDK\Shopping\Enums\CurrencyCodeType;

class CurrencyCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CurrencyCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Enums\CurrencyCodeType', $this->obj);
    }
}
