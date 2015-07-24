<?php

use DTS\eBaySDK\Trading\Enums\NotificationRoleCodeType;

class NotificationRoleCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new NotificationRoleCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\NotificationRoleCodeType', $this->obj);
    }
}
