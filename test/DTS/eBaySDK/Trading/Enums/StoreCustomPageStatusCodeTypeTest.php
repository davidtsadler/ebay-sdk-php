<?php

use DTS\eBaySDK\Trading\Enums\StoreCustomPageStatusCodeType;

class StoreCustomPageStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new StoreCustomPageStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\StoreCustomPageStatusCodeType', $this->obj);
    }
}
