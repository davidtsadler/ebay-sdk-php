<?php

use DTS\eBaySDK\Trading\Enums\SMSSubscriptionUserStatusCodeType;

class SMSSubscriptionUserStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SMSSubscriptionUserStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SMSSubscriptionUserStatusCodeType', $this->obj);
    }
}
