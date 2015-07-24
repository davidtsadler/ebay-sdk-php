<?php

use DTS\eBaySDK\Trading\Enums\BuyerSatisfactionStatusCodeType;

class BuyerSatisfactionStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BuyerSatisfactionStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\BuyerSatisfactionStatusCodeType', $this->obj);
    }
}
