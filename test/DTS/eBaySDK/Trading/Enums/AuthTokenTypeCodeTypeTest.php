<?php

use DTS\eBaySDK\Trading\Enums\AuthTokenTypeCodeType;

class AuthTokenTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AuthTokenTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\AuthTokenTypeCodeType', $this->obj);
    }
}
