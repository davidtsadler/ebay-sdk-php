<?php

use DTS\eBaySDK\Trading\Enums\SellingManagerAutomationPropertyTypeCodeType;

class SellingManagerAutomationPropertyTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SellingManagerAutomationPropertyTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SellingManagerAutomationPropertyTypeCodeType', $this->obj);
    }
}
