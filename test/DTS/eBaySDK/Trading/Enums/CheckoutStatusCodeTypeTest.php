<?php

use DTS\eBaySDK\Trading\Enums\CheckoutStatusCodeType;

class CheckoutStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CheckoutStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\CheckoutStatusCodeType', $this->obj);
    }
}
