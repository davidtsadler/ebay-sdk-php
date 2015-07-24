<?php

use DTS\eBaySDK\Trading\Enums\TaxIdentifierCodeType;

class TaxIdentifierCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new TaxIdentifierCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\TaxIdentifierCodeType', $this->obj);
    }
}
