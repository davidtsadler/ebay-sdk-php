<?php

use DTS\eBaySDK\Trading\Enums\DisputeCreditEligibilityCodeType;

class DisputeCreditEligibilityCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DisputeCreditEligibilityCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\DisputeCreditEligibilityCodeType', $this->obj);
    }
}
