<?php

use DTS\eBaySDK\Trading\Enums\NotificationEventTypeCodeType;

class NotificationEventTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new NotificationEventTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\NotificationEventTypeCodeType', $this->obj);
    }
}
