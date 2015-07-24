<?php

use DTS\eBaySDK\Trading\Enums\PreferredLocationCodeType;

class PreferredLocationCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PreferredLocationCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\PreferredLocationCodeType', $this->obj);
    }
}
