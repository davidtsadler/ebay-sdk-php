<?php

use DTS\eBaySDK\Trading\Enums\SearchFlagCodeType;

class SearchFlagCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SearchFlagCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\SearchFlagCodeType', $this->obj);
    }
}
