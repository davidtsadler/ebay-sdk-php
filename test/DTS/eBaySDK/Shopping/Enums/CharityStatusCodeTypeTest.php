<?php

use DTS\eBaySDK\Shopping\Enums\CharityStatusCodeType;

class CharityStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CharityStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Enums\CharityStatusCodeType', $this->obj);
    }
}
