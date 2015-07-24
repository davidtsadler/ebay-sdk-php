<?php

use DTS\eBaySDK\Trading\Enums\NotificationEventPropertyNameCodeType;

class NotificationEventPropertyNameCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new NotificationEventPropertyNameCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\NotificationEventPropertyNameCodeType', $this->obj);
    }
}
