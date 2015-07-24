<?php

use DTS\eBaySDK\Trading\Enums\CharitySellerStatusCodeType;

class CharitySellerStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CharitySellerStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\CharitySellerStatusCodeType', $this->obj);
    }
}
