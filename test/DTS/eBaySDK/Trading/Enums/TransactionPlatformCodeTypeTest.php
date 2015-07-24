<?php

use DTS\eBaySDK\Trading\Enums\TransactionPlatformCodeType;

class TransactionPlatformCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new TransactionPlatformCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\TransactionPlatformCodeType', $this->obj);
    }
}
