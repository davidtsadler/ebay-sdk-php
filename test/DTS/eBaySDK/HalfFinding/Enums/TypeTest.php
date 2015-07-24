<?php

use DTS\eBaySDK\HalfFinding\Enums\Type;

class TypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new Type();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\HalfFinding\Enums\Type', $this->obj);
    }
}
