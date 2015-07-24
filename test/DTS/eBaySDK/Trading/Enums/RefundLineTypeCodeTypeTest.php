<?php

use DTS\eBaySDK\Trading\Enums\RefundLineTypeCodeType;

class RefundLineTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new RefundLineTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\RefundLineTypeCodeType', $this->obj);
    }
}
