<?php

use DTS\eBaySDK\Trading\Enums\GiftIconCodeType;

class GiftIconCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GiftIconCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\GiftIconCodeType', $this->obj);
    }
}
