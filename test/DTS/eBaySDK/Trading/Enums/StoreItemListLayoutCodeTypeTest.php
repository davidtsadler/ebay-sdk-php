<?php

use DTS\eBaySDK\Trading\Enums\StoreItemListLayoutCodeType;

class StoreItemListLayoutCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new StoreItemListLayoutCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\StoreItemListLayoutCodeType', $this->obj);
    }
}
