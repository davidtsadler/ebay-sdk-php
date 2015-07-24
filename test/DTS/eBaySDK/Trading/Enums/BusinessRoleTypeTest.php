<?php

use DTS\eBaySDK\Trading\Enums\BusinessRoleType;

class BusinessRoleTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BusinessRoleType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\BusinessRoleType', $this->obj);
    }
}
