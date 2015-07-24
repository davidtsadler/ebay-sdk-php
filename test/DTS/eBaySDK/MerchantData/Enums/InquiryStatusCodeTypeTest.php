<?php

use DTS\eBaySDK\MerchantData\Enums\InquiryStatusCodeType;

class InquiryStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new InquiryStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\InquiryStatusCodeType', $this->obj);
    }
}
