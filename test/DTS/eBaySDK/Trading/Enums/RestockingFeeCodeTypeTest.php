<?php

use DTS\eBaySDK\Trading\Enums\RestockingFeeCodeType;

class RestockingFeeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new RestockingFeeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\RestockingFeeCodeType', $this->obj);
    }
}
