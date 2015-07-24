<?php

use DTS\eBaySDK\Trading\Enums\SellingManagerProductSortCodeType;

class SellingManagerProductSortCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SellingManagerProductSortCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SellingManagerProductSortCodeType', $this->obj);
    }
}
