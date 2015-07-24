<?php

use DTS\eBaySDK\Trading\Enums\OrderRoleCodeType;

class OrderRoleCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new OrderRoleCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\OrderRoleCodeType', $this->obj);
    }
}
