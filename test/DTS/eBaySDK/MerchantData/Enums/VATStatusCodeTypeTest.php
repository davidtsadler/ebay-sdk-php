<?php

use DTS\eBaySDK\MerchantData\Enums\VATStatusCodeType;

class VATStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new VATStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\VATStatusCodeType', $this->obj);
    }
}
