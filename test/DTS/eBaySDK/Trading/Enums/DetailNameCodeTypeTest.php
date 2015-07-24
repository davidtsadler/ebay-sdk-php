<?php

use DTS\eBaySDK\Trading\Enums\DetailNameCodeType;

class DetailNameCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DetailNameCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\DetailNameCodeType', $this->obj);
    }
}
