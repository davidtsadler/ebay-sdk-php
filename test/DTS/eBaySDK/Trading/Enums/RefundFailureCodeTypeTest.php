<?php

use DTS\eBaySDK\Trading\Enums\RefundFailureCodeType;

class RefundFailureCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new RefundFailureCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\RefundFailureCodeType', $this->obj);
    }
}
