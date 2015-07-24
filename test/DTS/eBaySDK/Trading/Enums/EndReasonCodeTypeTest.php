<?php

use DTS\eBaySDK\Trading\Enums\EndReasonCodeType;

class EndReasonCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new EndReasonCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\EndReasonCodeType', $this->obj);
    }
}
