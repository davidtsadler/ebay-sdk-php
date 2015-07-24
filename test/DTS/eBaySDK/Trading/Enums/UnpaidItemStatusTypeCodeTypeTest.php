<?php

use DTS\eBaySDK\Trading\Enums\UnpaidItemStatusTypeCodeType;

class UnpaidItemStatusTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new UnpaidItemStatusTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\UnpaidItemStatusTypeCodeType', $this->obj);
    }
}
