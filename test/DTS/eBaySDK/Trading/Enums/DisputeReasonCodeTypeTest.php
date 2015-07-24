<?php

use DTS\eBaySDK\Trading\Enums\DisputeReasonCodeType;

class DisputeReasonCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DisputeReasonCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\DisputeReasonCodeType', $this->obj);
    }
}
