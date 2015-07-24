<?php

use DTS\eBaySDK\Finding\Enums\MapExposureEnum;

class MapExposureEnumTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new MapExposureEnum();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Enums\MapExposureEnum', $this->obj);
    }
}
