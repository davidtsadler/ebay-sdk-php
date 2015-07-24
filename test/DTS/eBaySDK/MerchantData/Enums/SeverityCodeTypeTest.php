<?php

use DTS\eBaySDK\MerchantData\Enums\SeverityCodeType;

class SeverityCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SeverityCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\SeverityCodeType', $this->obj);
    }
}
