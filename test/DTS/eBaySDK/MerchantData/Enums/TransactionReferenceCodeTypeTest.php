<?php

use DTS\eBaySDK\MerchantData\Enums\TransactionReferenceCodeType;

class TransactionReferenceCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new TransactionReferenceCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\TransactionReferenceCodeType', $this->obj);
    }
}
