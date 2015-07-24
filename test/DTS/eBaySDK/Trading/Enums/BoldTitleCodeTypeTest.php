<?php

use DTS\eBaySDK\Trading\Enums\BoldTitleCodeType;

class BoldTitleCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BoldTitleCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\BoldTitleCodeType', $this->obj);
    }
}
