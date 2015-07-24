<?php

use DTS\eBaySDK\Trading\Enums\NotificationEventStateCodeType;

class NotificationEventStateCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new NotificationEventStateCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\NotificationEventStateCodeType', $this->obj);
    }
}
