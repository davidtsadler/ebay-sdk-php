<?php

use DTS\eBaySDK\Shopping\Enums\SiteCodeType;

class SiteCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SiteCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Enums\SiteCodeType', $this->obj);
    }
}
