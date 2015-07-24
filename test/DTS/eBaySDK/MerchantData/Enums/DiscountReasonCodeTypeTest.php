<?php

use DTS\eBaySDK\MerchantData\Enums\DiscountReasonCodeType;

class DiscountReasonCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DiscountReasonCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\DiscountReasonCodeType', $this->obj);
    }
}
