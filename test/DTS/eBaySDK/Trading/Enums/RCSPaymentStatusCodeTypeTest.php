<?php

use DTS\eBaySDK\Trading\Enums\RCSPaymentStatusCodeType;

class RCSPaymentStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new RCSPaymentStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\RCSPaymentStatusCodeType', $this->obj);
    }
}
