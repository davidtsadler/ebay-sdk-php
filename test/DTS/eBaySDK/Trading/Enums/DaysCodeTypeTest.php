<?php

use DTS\eBaySDK\Trading\Enums\DaysCodeType;

class DaysCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DaysCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\DaysCodeType', $this->obj);
    }
}
