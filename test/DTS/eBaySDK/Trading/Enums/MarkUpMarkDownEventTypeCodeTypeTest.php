<?php

use DTS\eBaySDK\Trading\Enums\MarkUpMarkDownEventTypeCodeType;

class MarkUpMarkDownEventTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new MarkUpMarkDownEventTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\MarkUpMarkDownEventTypeCodeType', $this->obj);
    }
}
