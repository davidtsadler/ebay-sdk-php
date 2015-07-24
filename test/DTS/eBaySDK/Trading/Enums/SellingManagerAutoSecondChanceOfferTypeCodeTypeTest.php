<?php

use DTS\eBaySDK\Trading\Enums\SellingManagerAutoSecondChanceOfferTypeCodeType;

class SellingManagerAutoSecondChanceOfferTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SellingManagerAutoSecondChanceOfferTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SellingManagerAutoSecondChanceOfferTypeCodeType', $this->obj);
    }
}
