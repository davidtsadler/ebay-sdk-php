<?php

use DTS\eBaySDK\MerchantData\Enums\CharityAffiliationTypeCodeType;

class CharityAffiliationTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CharityAffiliationTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\CharityAffiliationTypeCodeType', $this->obj);
    }
}
