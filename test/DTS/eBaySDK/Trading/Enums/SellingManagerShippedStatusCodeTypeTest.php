<?php

use DTS\eBaySDK\Trading\Enums\SellingManagerShippedStatusCodeType;

class SellingManagerShippedStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SellingManagerShippedStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SellingManagerShippedStatusCodeType', $this->obj);
    }
}
