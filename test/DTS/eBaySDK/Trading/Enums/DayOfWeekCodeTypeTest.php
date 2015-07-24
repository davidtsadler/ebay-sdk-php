<?php

use DTS\eBaySDK\Trading\Enums\DayOfWeekCodeType;

class DayOfWeekCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DayOfWeekCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\DayOfWeekCodeType', $this->obj);
    }
}
