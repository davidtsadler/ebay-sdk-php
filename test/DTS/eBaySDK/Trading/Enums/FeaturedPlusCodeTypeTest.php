<?php

use DTS\eBaySDK\Trading\Enums\FeaturedPlusCodeType;

class FeaturedPlusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new FeaturedPlusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\FeaturedPlusCodeType', $this->obj);
    }
}
