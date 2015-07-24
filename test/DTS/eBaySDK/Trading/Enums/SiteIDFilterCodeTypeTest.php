<?php

use DTS\eBaySDK\Trading\Enums\SiteIDFilterCodeType;

class SiteIDFilterCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SiteIDFilterCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SiteIDFilterCodeType', $this->obj);
    }
}
