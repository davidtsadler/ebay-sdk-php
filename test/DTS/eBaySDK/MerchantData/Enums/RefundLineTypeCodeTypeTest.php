<?php

use DTS\eBaySDK\MerchantData\Enums\RefundLineTypeCodeType;

class RefundLineTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new RefundLineTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\RefundLineTypeCodeType', $this->obj);
    }
}
