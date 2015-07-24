<?php

use DTS\eBaySDK\Trading\Enums\NotificationPayloadTypeCodeType;

class NotificationPayloadTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new NotificationPayloadTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\NotificationPayloadTypeCodeType', $this->obj);
    }
}
