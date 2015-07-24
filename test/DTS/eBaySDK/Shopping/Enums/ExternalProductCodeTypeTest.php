<?php

use DTS\eBaySDK\Shopping\Enums\ExternalProductCodeType;

class ExternalProductCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ExternalProductCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Enums\ExternalProductCodeType', $this->obj);
    }
}
