<?php

use DTS\eBaySDK\Trading\Enums\PurchasePurposeTypeCodeType;

class PurchasePurposeTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PurchasePurposeTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\PurchasePurposeTypeCodeType', $this->obj);
    }
}
