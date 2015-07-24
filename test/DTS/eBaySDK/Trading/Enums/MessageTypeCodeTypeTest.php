<?php

use DTS\eBaySDK\Trading\Enums\MessageTypeCodeType;

class MessageTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new MessageTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\MessageTypeCodeType', $this->obj);
    }
}
