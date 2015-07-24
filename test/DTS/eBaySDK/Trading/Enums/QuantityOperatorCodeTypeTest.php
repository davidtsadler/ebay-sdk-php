<?php

use DTS\eBaySDK\Trading\Enums\QuantityOperatorCodeType;

class QuantityOperatorCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new QuantityOperatorCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\QuantityOperatorCodeType', $this->obj);
    }
}
