<?php

use DTS\eBaySDK\MerchantData\Enums\DiscountNameCodeType;

class DiscountNameCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DiscountNameCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\DiscountNameCodeType', $this->obj);
    }
}
