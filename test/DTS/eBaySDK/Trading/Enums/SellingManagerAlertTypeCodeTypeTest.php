<?php

use DTS\eBaySDK\Trading\Enums\SellingManagerAlertTypeCodeType;

class SellingManagerAlertTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SellingManagerAlertTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SellingManagerAlertTypeCodeType', $this->obj);
    }
}
