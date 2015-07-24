<?php

use DTS\eBaySDK\Trading\Enums\TicketEventTypeCodeType;

class TicketEventTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new TicketEventTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\TicketEventTypeCodeType', $this->obj);
    }
}
