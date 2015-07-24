<?php

use DTS\eBaySDK\Trading\Enums\StringMatchCodeType;

class StringMatchCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new StringMatchCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\StringMatchCodeType', $this->obj);
    }
}
