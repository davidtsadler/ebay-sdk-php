<?php

use DTS\eBaySDK\Trading\Enums\FeatureIDCodeType;

class FeatureIDCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new FeatureIDCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\FeatureIDCodeType', $this->obj);
    }
}
