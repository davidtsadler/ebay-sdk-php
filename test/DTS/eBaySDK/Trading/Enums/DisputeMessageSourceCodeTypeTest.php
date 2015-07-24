<?php

use DTS\eBaySDK\Trading\Enums\DisputeMessageSourceCodeType;

class DisputeMessageSourceCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DisputeMessageSourceCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\DisputeMessageSourceCodeType', $this->obj);
    }
}
