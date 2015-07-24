<?php

use DTS\eBaySDK\Trading\Types\StoreOwnerExtendedListingDurationsDefinitionType;

class StoreOwnerExtendedListingDurationsDefinitionTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new StoreOwnerExtendedListingDurationsDefinitionType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\StoreOwnerExtendedListingDurationsDefinitionType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
