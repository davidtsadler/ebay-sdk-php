<?php

use DTS\eBaySDK\MerchantData\Enums\PaidStatusCodeType;

class PaidStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PaidStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\PaidStatusCodeType', $this->obj);
    }
}
