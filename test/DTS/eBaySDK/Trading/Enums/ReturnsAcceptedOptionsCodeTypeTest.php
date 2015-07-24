<?php

use DTS\eBaySDK\Trading\Enums\ReturnsAcceptedOptionsCodeType;

class ReturnsAcceptedOptionsCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ReturnsAcceptedOptionsCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\ReturnsAcceptedOptionsCodeType', $this->obj);
    }
}
