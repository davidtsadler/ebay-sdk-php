<?php

use DTS\eBaySDK\Trading\Enums\DiscountNameCodeType;

class DiscountNameCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DiscountNameCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\DiscountNameCodeType', $this->obj);
    }
}
