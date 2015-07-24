<?php

use DTS\eBaySDK\BulkDataExchange\Enums\OrderStatusTypes;

class OrderStatusTypesTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new OrderStatusTypes();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Enums\OrderStatusTypes', $this->obj);
    }
}
