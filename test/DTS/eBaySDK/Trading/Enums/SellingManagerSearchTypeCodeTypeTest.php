<?php

use DTS\eBaySDK\Trading\Enums\SellingManagerSearchTypeCodeType;

class SellingManagerSearchTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SellingManagerSearchTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SellingManagerSearchTypeCodeType', $this->obj);
    }
}
