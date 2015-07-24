<?php

use DTS\eBaySDK\MerchantData\Enums\UserIdentityCodeType;

class UserIdentityCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new UserIdentityCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\UserIdentityCodeType', $this->obj);
    }
}
