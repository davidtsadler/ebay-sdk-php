<?php

use DTS\eBaySDK\Types\DecimalType;

class DecimalTypeTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->obj = new DecimalType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\DecimalType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }

    public function testHasValueProperty()
    {
        $this->obj->value = 123;
        $this->assertEquals(123, $this->obj->value);
        $this->assertInternalType('integer', $this->obj->value);
    }
}
