<?php

use DTS\eBaySDK\BulkDataExchange\Enums\IncludeShippingAddressType;

class IncludeShippingAddressTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new IncludeShippingAddressType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Enums\IncludeShippingAddressType', $this->obj);
    }
}
