<?php

use DTS\eBaySDK\Trading\Enums\AccountStateCodeType;

class AccountStateCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AccountStateCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\AccountStateCodeType', $this->obj);
    }
}
