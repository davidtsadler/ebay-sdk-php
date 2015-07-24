<?php

use DTS\eBaySDK\MerchantData\Enums\ValueTypeCodeType;

class ValueTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ValueTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\ValueTypeCodeType', $this->obj);
    }
}
