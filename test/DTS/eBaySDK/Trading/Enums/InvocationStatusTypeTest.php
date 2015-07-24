<?php

use DTS\eBaySDK\Trading\Enums\InvocationStatusType;

class InvocationStatusTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new InvocationStatusType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\InvocationStatusType', $this->obj);
    }
}
