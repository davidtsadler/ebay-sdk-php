<?php

use DTS\eBaySDK\Trading\Types\LocalListingDistancesSpecialtyDefinitionType;

class LocalListingDistancesSpecialtyDefinitionTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new LocalListingDistancesSpecialtyDefinitionType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\LocalListingDistancesSpecialtyDefinitionType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
