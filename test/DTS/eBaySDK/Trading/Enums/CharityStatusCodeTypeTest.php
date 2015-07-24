<?php

use DTS\eBaySDK\Trading\Enums\CharityStatusCodeType;

class CharityStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CharityStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\CharityStatusCodeType', $this->obj);
    }
}
