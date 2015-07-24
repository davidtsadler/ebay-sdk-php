<?php

use DTS\eBaySDK\Trading\Enums\LogisticsPlanCodeType;

class LogisticsPlanCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new LogisticsPlanCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\LogisticsPlanCodeType', $this->obj);
    }
}
