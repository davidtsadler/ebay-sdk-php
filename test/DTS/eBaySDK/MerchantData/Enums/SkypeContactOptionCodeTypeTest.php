<?php

use DTS\eBaySDK\MerchantData\Enums\SkypeContactOptionCodeType;

class SkypeContactOptionCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SkypeContactOptionCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\SkypeContactOptionCodeType', $this->obj);
    }
}
