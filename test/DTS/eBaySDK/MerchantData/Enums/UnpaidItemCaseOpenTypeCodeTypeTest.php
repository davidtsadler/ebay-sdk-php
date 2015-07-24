<?php

use DTS\eBaySDK\MerchantData\Enums\UnpaidItemCaseOpenTypeCodeType;

class UnpaidItemCaseOpenTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new UnpaidItemCaseOpenTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\UnpaidItemCaseOpenTypeCodeType', $this->obj);
    }
}
