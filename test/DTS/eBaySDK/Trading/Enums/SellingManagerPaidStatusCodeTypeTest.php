<?php

use DTS\eBaySDK\Trading\Enums\SellingManagerPaidStatusCodeType;

class SellingManagerPaidStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SellingManagerPaidStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SellingManagerPaidStatusCodeType', $this->obj);
    }
}
