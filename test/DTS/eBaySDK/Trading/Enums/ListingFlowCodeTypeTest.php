<?php

use DTS\eBaySDK\Trading\Enums\ListingFlowCodeType;

class ListingFlowCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ListingFlowCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ListingFlowCodeType', $this->obj);
    }
}
