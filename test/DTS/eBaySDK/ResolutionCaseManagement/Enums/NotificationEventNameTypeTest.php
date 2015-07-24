<?php

use DTS\eBaySDK\ResolutionCaseManagement\Enums\NotificationEventNameType;

class NotificationEventNameTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new NotificationEventNameType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Enums\NotificationEventNameType', $this->obj);
    }
}
