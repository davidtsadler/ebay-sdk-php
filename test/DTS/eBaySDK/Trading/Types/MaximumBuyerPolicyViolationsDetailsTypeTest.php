<?php

use DTS\eBaySDK\Trading\Types\MaximumBuyerPolicyViolationsDetailsType;

class MaximumBuyerPolicyViolationsDetailsTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new MaximumBuyerPolicyViolationsDetailsType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\MaximumBuyerPolicyViolationsDetailsType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
