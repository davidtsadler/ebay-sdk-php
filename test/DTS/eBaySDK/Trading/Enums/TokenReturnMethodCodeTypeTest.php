<?php

use DTS\eBaySDK\Trading\Enums\TokenReturnMethodCodeType;

class TokenReturnMethodCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new TokenReturnMethodCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\TokenReturnMethodCodeType', $this->obj);
    }
}
