<?php

use DTS\eBaySDK\MerchantData\Enums\RefundFailureCodeType;

class RefundFailureCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new RefundFailureCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\RefundFailureCodeType', $this->obj);
    }
}
