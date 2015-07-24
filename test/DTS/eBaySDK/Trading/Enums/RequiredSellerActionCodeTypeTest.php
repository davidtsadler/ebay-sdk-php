<?php

use DTS\eBaySDK\Trading\Enums\RequiredSellerActionCodeType;

class RequiredSellerActionCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new RequiredSellerActionCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\RequiredSellerActionCodeType', $this->obj);
    }
}
