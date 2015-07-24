<?php

use DTS\eBaySDK\Trading\Enums\TaxTypeCodeType;

class TaxTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new TaxTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\TaxTypeCodeType', $this->obj);
    }
}
