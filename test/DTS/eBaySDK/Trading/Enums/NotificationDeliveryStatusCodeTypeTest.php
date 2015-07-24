<?php

use DTS\eBaySDK\Trading\Enums\NotificationDeliveryStatusCodeType;

class NotificationDeliveryStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new NotificationDeliveryStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\NotificationDeliveryStatusCodeType', $this->obj);
    }
}
