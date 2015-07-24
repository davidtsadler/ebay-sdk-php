<?php

use DTS\eBaySDK\Trading\Enums\RefundOptionsCodeType;

class RefundOptionsCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new RefundOptionsCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\RefundOptionsCodeType', $this->obj);
    }
}
