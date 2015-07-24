<?php

use DTS\eBaySDK\Trading\Enums\RefundTypeCodeType;

class RefundTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new RefundTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\RefundTypeCodeType', $this->obj);
    }
}
