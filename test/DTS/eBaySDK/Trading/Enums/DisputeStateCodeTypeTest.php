<?php

use DTS\eBaySDK\Trading\Enums\DisputeStateCodeType;

class DisputeStateCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DisputeStateCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\DisputeStateCodeType', $this->obj);
    }
}
