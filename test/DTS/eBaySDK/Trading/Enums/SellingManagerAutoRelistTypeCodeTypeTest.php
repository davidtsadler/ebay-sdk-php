<?php

use DTS\eBaySDK\Trading\Enums\SellingManagerAutoRelistTypeCodeType;

class SellingManagerAutoRelistTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SellingManagerAutoRelistTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SellingManagerAutoRelistTypeCodeType', $this->obj);
    }
}
