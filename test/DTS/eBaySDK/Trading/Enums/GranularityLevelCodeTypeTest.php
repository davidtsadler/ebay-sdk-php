<?php

use DTS\eBaySDK\Trading\Enums\GranularityLevelCodeType;

class GranularityLevelCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GranularityLevelCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\GranularityLevelCodeType', $this->obj);
    }
}
