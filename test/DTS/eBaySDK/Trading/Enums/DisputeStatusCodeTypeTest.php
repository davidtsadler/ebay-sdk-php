<?php

use DTS\eBaySDK\Trading\Enums\DisputeStatusCodeType;

class DisputeStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DisputeStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\DisputeStatusCodeType', $this->obj);
    }
}
