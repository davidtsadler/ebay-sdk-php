<?php

use DTS\eBaySDK\Trading\Enums\MismatchTypeCodeType;

class MismatchTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new MismatchTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\MismatchTypeCodeType', $this->obj);
    }
}
