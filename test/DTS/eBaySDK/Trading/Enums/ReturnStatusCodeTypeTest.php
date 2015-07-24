<?php

use DTS\eBaySDK\Trading\Enums\ReturnStatusCodeType;

class ReturnStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ReturnStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ReturnStatusCodeType', $this->obj);
    }
}
