<?php

use DTS\eBaySDK\MerchantData\Enums\BusinessRoleType;

class BusinessRoleTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BusinessRoleType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\BusinessRoleType', $this->obj);
    }
}
