<?php

use DTS\eBaySDK\Trading\Enums\RefundSourceTypeCodeType;

class RefundSourceTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new RefundSourceTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\RefundSourceTypeCodeType', $this->obj);
    }
}
