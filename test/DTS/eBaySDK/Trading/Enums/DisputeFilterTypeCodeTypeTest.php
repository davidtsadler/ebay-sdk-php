<?php

use DTS\eBaySDK\Trading\Enums\DisputeFilterTypeCodeType;

class DisputeFilterTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DisputeFilterTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\DisputeFilterTypeCodeType', $this->obj);
    }
}
