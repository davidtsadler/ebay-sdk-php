<?php

use DTS\eBaySDK\Trading\Enums\AttributeConversionEnabledCodeType;

class AttributeConversionEnabledCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AttributeConversionEnabledCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\AttributeConversionEnabledCodeType', $this->obj);
    }
}
