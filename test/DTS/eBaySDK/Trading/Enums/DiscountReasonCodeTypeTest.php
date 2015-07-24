<?php

use DTS\eBaySDK\Trading\Enums\DiscountReasonCodeType;

class DiscountReasonCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DiscountReasonCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\DiscountReasonCodeType', $this->obj);
    }
}
