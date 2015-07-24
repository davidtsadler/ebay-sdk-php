<?php

use DTS\eBaySDK\Trading\Enums\StoreCustomHeaderLayoutCodeType;

class StoreCustomHeaderLayoutCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new StoreCustomHeaderLayoutCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\StoreCustomHeaderLayoutCodeType', $this->obj);
    }
}
