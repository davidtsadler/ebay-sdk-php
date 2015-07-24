<?php

use DTS\eBaySDK\Trading\Enums\UserStatusCodeType;

class UserStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new UserStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\UserStatusCodeType', $this->obj);
    }
}
