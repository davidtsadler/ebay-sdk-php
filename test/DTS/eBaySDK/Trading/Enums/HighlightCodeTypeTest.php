<?php

use DTS\eBaySDK\Trading\Enums\HighlightCodeType;

class HighlightCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new HighlightCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\HighlightCodeType', $this->obj);
    }
}
