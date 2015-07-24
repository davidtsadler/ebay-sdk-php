<?php

use DTS\eBaySDK\Trading\Enums\FedExRateOptionCodeType;

class FedExRateOptionCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new FedExRateOptionCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\FedExRateOptionCodeType', $this->obj);
    }
}
