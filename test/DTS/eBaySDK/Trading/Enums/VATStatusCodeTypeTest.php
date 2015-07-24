<?php

use DTS\eBaySDK\Trading\Enums\VATStatusCodeType;

class VATStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new VATStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\VATStatusCodeType', $this->obj);
    }
}
