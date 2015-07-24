<?php

use DTS\eBaySDK\Trading\Enums\FeaturedFirstCodeType;

class FeaturedFirstCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new FeaturedFirstCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\FeaturedFirstCodeType', $this->obj);
    }
}
