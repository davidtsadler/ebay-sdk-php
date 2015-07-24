<?php

use DTS\eBaySDK\Trading\Enums\TaxIdentifierAttributeCodeType;

class TaxIdentifierAttributeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new TaxIdentifierAttributeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\TaxIdentifierAttributeCodeType', $this->obj);
    }
}
