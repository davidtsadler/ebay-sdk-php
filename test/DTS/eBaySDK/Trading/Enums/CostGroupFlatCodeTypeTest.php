<?php

use DTS\eBaySDK\Trading\Enums\CostGroupFlatCodeType;

class CostGroupFlatCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CostGroupFlatCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\CostGroupFlatCodeType', $this->obj);
    }
}
