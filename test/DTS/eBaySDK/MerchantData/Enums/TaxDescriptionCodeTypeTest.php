<?php

use DTS\eBaySDK\MerchantData\Enums\TaxDescriptionCodeType;

class TaxDescriptionCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new TaxDescriptionCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\TaxDescriptionCodeType', $this->obj);
    }
}
