<?php

use DTS\eBaySDK\Trading\Enums\PromotionalSaleStatusCodeType;

class PromotionalSaleStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PromotionalSaleStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\PromotionalSaleStatusCodeType', $this->obj);
    }
}
