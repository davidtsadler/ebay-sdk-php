<?php

use DTS\eBaySDK\Trading\Enums\SellingManagerEmailTypeCodeType;

class SellingManagerEmailTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SellingManagerEmailTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SellingManagerEmailTypeCodeType', $this->obj);
    }
}
