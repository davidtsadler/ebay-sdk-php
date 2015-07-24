<?php

use DTS\eBaySDK\Trading\Enums\TaskStatusCodeType;

class TaskStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new TaskStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\TaskStatusCodeType', $this->obj);
    }
}
