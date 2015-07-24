<?php

use DTS\eBaySDK\Trading\Enums\PromotionalSaleTypeCodeType;

class PromotionalSaleTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PromotionalSaleTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\PromotionalSaleTypeCodeType', $this->obj);
    }
}
