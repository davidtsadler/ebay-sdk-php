<?php

use DTS\eBaySDK\Trading\Enums\TransactionReferenceCodeType;

class TransactionReferenceCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new TransactionReferenceCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\TransactionReferenceCodeType', $this->obj);
    }
}
