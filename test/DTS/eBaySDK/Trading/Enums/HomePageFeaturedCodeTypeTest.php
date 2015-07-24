<?php

use DTS\eBaySDK\Trading\Enums\HomePageFeaturedCodeType;

class HomePageFeaturedCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new HomePageFeaturedCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\HomePageFeaturedCodeType', $this->obj);
    }
}
