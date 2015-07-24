<?php

use DTS\eBaySDK\Types\BooleanType;

class BooleanTypeTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->obj = new BooleanType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BooleanType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }

    public function testHasValueProperty()
    {
        $this->obj->value = true;
        $this->assertEquals(true, $this->obj->value);
        $this->assertInternalType('boolean', $this->obj->value);
    }
}
