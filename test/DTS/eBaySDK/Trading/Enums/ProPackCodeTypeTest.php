<?php

use DTS\eBaySDK\Trading\Enums\ProPackCodeType;

class ProPackCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ProPackCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ProPackCodeType', $this->obj);
    }
}
