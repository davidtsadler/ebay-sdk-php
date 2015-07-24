<?php

use DTS\eBaySDK\MerchantData\Enums\TaxIdentifierAttributeCodeType;

class TaxIdentifierAttributeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new TaxIdentifierAttributeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\TaxIdentifierAttributeCodeType', $this->obj);
    }
}
