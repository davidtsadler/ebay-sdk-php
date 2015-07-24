<?php

use DTS\eBaySDK\Trading\Enums\TokenStatusCodeType;

class TokenStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new TokenStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\TokenStatusCodeType', $this->obj);
    }
}
