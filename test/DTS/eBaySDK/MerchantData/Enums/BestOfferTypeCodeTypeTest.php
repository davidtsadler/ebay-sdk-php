<?php

use DTS\eBaySDK\MerchantData\Enums\BestOfferTypeCodeType;

class BestOfferTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BestOfferTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\BestOfferTypeCodeType', $this->obj);
    }
}
