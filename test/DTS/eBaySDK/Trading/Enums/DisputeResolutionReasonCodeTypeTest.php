<?php

use DTS\eBaySDK\Trading\Enums\DisputeResolutionReasonCodeType;

class DisputeResolutionReasonCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DisputeResolutionReasonCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\DisputeResolutionReasonCodeType', $this->obj);
    }
}
