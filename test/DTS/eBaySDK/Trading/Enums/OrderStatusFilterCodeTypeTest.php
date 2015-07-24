<?php

use DTS\eBaySDK\Trading\Enums\OrderStatusFilterCodeType;

class OrderStatusFilterCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new OrderStatusFilterCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\OrderStatusFilterCodeType', $this->obj);
    }
}
