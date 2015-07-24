<?php

use DTS\eBaySDK\MerchantData\Enums\AckCodeType;

class AckCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AckCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\AckCodeType', $this->obj);
    }
}
