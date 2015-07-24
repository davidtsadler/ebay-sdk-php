<?php

use DTS\eBaySDK\MerchantData\Types\RefundLineType;

class RefundLineTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new RefundLineType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\RefundLineType', $this->obj);
    }

    public function testExtendsAmountType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\AmountType', $this->obj);
    }
}
