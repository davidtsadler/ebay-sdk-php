<?php

use DTS\eBaySDK\Trading\Enums\SellingManagerAutoRelistOptionCodeType;

class SellingManagerAutoRelistOptionCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SellingManagerAutoRelistOptionCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SellingManagerAutoRelistOptionCodeType', $this->obj);
    }
}
