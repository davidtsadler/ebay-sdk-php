<?php

use DTS\eBaySDK\Trading\Enums\WarningLevelCodeType;

class WarningLevelCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new WarningLevelCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\WarningLevelCodeType', $this->obj);
    }
}
