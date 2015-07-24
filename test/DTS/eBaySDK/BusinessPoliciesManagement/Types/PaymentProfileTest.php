<?php

use DTS\eBaySDK\BusinessPoliciesManagement\Types\PaymentProfile;

class PaymentProfileTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PaymentProfile();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BusinessPoliciesManagement\Types\PaymentProfile', $this->obj);
    }

    public function testExtendsSellerProfile()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BusinessPoliciesManagement\Types\SellerProfile', $this->obj);
    }
}
