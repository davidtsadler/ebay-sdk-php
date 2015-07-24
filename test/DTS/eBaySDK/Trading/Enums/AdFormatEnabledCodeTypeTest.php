<?php

use DTS\eBaySDK\Trading\Enums\AdFormatEnabledCodeType;

class AdFormatEnabledCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AdFormatEnabledCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\AdFormatEnabledCodeType', $this->obj);
    }
}
