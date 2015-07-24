<?php

use DTS\eBaySDK\Shopping\Enums\SeverityCodeType;

class SeverityCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SeverityCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Enums\SeverityCodeType', $this->obj);
    }
}
