<?php

use DTS\eBaySDK\BusinessPoliciesManagement\Enums\ProfileType;

class ProfileTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ProfileType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BusinessPoliciesManagement\Enums\ProfileType', $this->obj);
    }
}
