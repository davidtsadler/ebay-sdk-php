<?php

use DTS\eBaySDK\Trading\Enums\SMSSubscriptionErrorCodeCodeType;

class SMSSubscriptionErrorCodeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SMSSubscriptionErrorCodeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SMSSubscriptionErrorCodeCodeType', $this->obj);
    }
}
