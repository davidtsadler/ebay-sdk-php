<?php

use DTS\eBaySDK\Trading\Enums\SeverityCodeType;

class SeverityCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SeverityCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SeverityCodeType', $this->obj);
    }
}
