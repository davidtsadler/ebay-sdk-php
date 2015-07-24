<?php

use DTS\eBaySDK\Trading\Enums\StoreCategoryUpdateActionCodeType;

class StoreCategoryUpdateActionCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new StoreCategoryUpdateActionCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\StoreCategoryUpdateActionCodeType', $this->obj);
    }
}
