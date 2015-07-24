<?php

use DTS\eBaySDK\Trading\Enums\DiscountCodeType;

class DiscountCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DiscountCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\DiscountCodeType', $this->obj);
    }
}
