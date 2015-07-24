<?php

use DTS\eBaySDK\Trading\Enums\AccountDetailEntryCodeType;

class AccountDetailEntryCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AccountDetailEntryCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\AccountDetailEntryCodeType', $this->obj);
    }
}
