<?php

use DTS\eBaySDK\Trading\Enums\AccountEntrySortTypeCodeType;

class AccountEntrySortTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AccountEntrySortTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\AccountEntrySortTypeCodeType', $this->obj);
    }
}
