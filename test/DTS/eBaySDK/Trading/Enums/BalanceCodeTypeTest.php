<?php

use DTS\eBaySDK\Trading\Enums\BalanceCodeType;

class BalanceCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BalanceCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\BalanceCodeType', $this->obj);
    }
}
