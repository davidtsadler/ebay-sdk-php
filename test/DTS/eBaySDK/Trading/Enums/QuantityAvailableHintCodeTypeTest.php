<?php

use DTS\eBaySDK\Trading\Enums\QuantityAvailableHintCodeType;

class QuantityAvailableHintCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new QuantityAvailableHintCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\QuantityAvailableHintCodeType', $this->obj);
    }
}
