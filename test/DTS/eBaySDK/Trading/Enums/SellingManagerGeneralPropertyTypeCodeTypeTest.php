<?php

use DTS\eBaySDK\Trading\Enums\SellingManagerGeneralPropertyTypeCodeType;

class SellingManagerGeneralPropertyTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SellingManagerGeneralPropertyTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SellingManagerGeneralPropertyTypeCodeType', $this->obj);
    }
}
