<?php

use DTS\eBaySDK\Shopping\Enums\UserStatusCodeType;

class UserStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new UserStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Enums\UserStatusCodeType', $this->obj);
    }
}
