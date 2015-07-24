<?php

use DTS\eBaySDK\Trading\Enums\GiftServicesCodeType;

class GiftServicesCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GiftServicesCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\GiftServicesCodeType', $this->obj);
    }
}
