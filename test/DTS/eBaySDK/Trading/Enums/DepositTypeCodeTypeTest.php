<?php

use DTS\eBaySDK\Trading\Enums\DepositTypeCodeType;

class DepositTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DepositTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\DepositTypeCodeType', $this->obj);
    }
}
