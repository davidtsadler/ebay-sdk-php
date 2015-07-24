<?php

use DTS\eBaySDK\BusinessPoliciesManagement\Types\DeliveryEstimateMetaInfo;

class DeliveryEstimateMetaInfoTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DeliveryEstimateMetaInfo();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BusinessPoliciesManagement\Types\DeliveryEstimateMetaInfo', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
