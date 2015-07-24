<?php

use DTS\eBaySDK\Trading\Enums\AdFormatLeadStatusCodeType;

class AdFormatLeadStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AdFormatLeadStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\AdFormatLeadStatusCodeType', $this->obj);
    }
}
