<?php

use DTS\eBaySDK\Trading\Enums\TopRatedProgramCodeType;

class TopRatedProgramCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new TopRatedProgramCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\TopRatedProgramCodeType', $this->obj);
    }
}
