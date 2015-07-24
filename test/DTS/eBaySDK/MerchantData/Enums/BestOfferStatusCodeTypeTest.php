<?php

use DTS\eBaySDK\MerchantData\Enums\BestOfferStatusCodeType;

class BestOfferStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BestOfferStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\BestOfferStatusCodeType', $this->obj);
    }
}
