<?php

use DTS\eBaySDK\MerchantData\Enums\DescriptionReviseModeCodeType;

class DescriptionReviseModeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DescriptionReviseModeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\DescriptionReviseModeCodeType', $this->obj);
    }
}
