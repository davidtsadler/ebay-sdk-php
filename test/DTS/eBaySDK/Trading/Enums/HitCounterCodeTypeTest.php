<?php

use DTS\eBaySDK\Trading\Enums\HitCounterCodeType;

class HitCounterCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new HitCounterCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\HitCounterCodeType', $this->obj);
    }
}
