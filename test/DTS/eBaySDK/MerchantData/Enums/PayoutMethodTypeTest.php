<?php

use DTS\eBaySDK\MerchantData\Enums\PayoutMethodType;

class PayoutMethodTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PayoutMethodType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\PayoutMethodType', $this->obj);
    }
}
