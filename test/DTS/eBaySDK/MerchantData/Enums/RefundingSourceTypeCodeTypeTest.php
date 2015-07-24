<?php

use DTS\eBaySDK\MerchantData\Enums\RefundingSourceTypeCodeType;

class RefundingSourceTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new RefundingSourceTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\RefundingSourceTypeCodeType', $this->obj);
    }
}
