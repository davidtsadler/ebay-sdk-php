<?php

use DTS\eBaySDK\Trading\Enums\CancelReasonCodeType;

class CancelReasonCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CancelReasonCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\CancelReasonCodeType', $this->obj);
    }
}
