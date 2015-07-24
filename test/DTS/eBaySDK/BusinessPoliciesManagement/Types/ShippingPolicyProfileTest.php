<?php

use DTS\eBaySDK\BusinessPoliciesManagement\Types\ShippingPolicyProfile;

class ShippingPolicyProfileTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ShippingPolicyProfile();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BusinessPoliciesManagement\Types\ShippingPolicyProfile', $this->obj);
    }

    public function testExtendsSellerProfile()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BusinessPoliciesManagement\Types\SellerProfile', $this->obj);
    }
}
