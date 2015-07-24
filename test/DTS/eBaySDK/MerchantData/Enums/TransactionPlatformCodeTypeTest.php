<?php

use DTS\eBaySDK\MerchantData\Enums\TransactionPlatformCodeType;

class TransactionPlatformCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new TransactionPlatformCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\TransactionPlatformCodeType', $this->obj);
    }
}
