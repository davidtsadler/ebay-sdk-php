<?php

use DTS\eBaySDK\MerchantData\Enums\QuantityAvailableHintCodeType;

class QuantityAvailableHintCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new QuantityAvailableHintCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\QuantityAvailableHintCodeType', $this->obj);
    }
}
