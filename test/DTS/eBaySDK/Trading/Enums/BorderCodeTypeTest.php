<?php

use DTS\eBaySDK\Trading\Enums\BorderCodeType;

class BorderCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BorderCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\BorderCodeType', $this->obj);
    }
}
