<?php

use DTS\eBaySDK\Trading\Enums\SearchStandingStatusCodeType;

class SearchStandingStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SearchStandingStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SearchStandingStatusCodeType', $this->obj);
    }
}
