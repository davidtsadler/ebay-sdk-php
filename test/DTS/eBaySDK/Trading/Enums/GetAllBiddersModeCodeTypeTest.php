<?php

use DTS\eBaySDK\Trading\Enums\GetAllBiddersModeCodeType;

class GetAllBiddersModeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetAllBiddersModeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\GetAllBiddersModeCodeType', $this->obj);
    }
}
