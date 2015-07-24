<?php

use DTS\eBaySDK\Trading\Enums\RefundReasonCodeType;

class RefundReasonCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new RefundReasonCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\RefundReasonCodeType', $this->obj);
    }
}
