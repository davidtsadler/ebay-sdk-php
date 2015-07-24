<?php

use DTS\eBaySDK\MerchantData\Types\IntegratedMerchantCreditCardInfoType;

class IntegratedMerchantCreditCardInfoTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new IntegratedMerchantCreditCardInfoType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\IntegratedMerchantCreditCardInfoType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
