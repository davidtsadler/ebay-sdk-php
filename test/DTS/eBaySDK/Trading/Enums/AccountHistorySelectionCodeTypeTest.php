<?php

use DTS\eBaySDK\Trading\Enums\AccountHistorySelectionCodeType;

class AccountHistorySelectionCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AccountHistorySelectionCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\AccountHistorySelectionCodeType', $this->obj);
    }
}
