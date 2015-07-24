<?php

use DTS\eBaySDK\Trading\Enums\OrderStatusCodeType;

class OrderStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new OrderStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\OrderStatusCodeType', $this->obj);
    }
}
