<?php

use DTS\eBaySDK\Trading\Enums\MessageStatusTypeCodeType;

class MessageStatusTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new MessageStatusTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\MessageStatusTypeCodeType', $this->obj);
    }
}
