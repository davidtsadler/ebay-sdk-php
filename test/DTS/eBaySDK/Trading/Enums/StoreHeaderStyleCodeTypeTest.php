<?php

use DTS\eBaySDK\Trading\Enums\StoreHeaderStyleCodeType;

class StoreHeaderStyleCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new StoreHeaderStyleCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\StoreHeaderStyleCodeType', $this->obj);
    }
}
