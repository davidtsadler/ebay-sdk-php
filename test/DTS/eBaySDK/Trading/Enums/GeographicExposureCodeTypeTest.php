<?php

use DTS\eBaySDK\Trading\Enums\GeographicExposureCodeType;

class GeographicExposureCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GeographicExposureCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\GeographicExposureCodeType', $this->obj);
    }
}
