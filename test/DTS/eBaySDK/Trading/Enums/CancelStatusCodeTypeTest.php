<?php

use DTS\eBaySDK\Trading\Enums\CancelStatusCodeType;

class CancelStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CancelStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\CancelStatusCodeType', $this->obj);
    }
}
