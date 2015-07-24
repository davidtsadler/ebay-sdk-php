<?php

use DTS\eBaySDK\MerchantData\Enums\RefundSourceTypeCodeType;

class RefundSourceTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new RefundSourceTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\RefundSourceTypeCodeType', $this->obj);
    }
}
