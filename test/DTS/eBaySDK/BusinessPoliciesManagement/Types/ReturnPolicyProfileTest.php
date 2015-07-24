<?php

use DTS\eBaySDK\BusinessPoliciesManagement\Types\ReturnPolicyProfile;

class ReturnPolicyProfileTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ReturnPolicyProfile();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BusinessPoliciesManagement\Types\ReturnPolicyProfile', $this->obj);
    }

    public function testExtendsSellerProfile()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BusinessPoliciesManagement\Types\SellerProfile', $this->obj);
    }
}
