<?php

use DTS\eBaySDK\MerchantData\Enums\RefundStatusCodeType;

class RefundStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new RefundStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\RefundStatusCodeType', $this->obj);
    }
}
