<?php

use DTS\eBaySDK\Trading\Enums\SellingManagerPaisaPayPropertyTypeCodeType;

class SellingManagerPaisaPayPropertyTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SellingManagerPaisaPayPropertyTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SellingManagerPaisaPayPropertyTypeCodeType', $this->obj);
    }
}
