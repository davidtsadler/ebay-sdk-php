<?php

use DTS\eBaySDK\HalfFinding\Enums\ErrorSeverity;

class ErrorSeverityTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ErrorSeverity();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\HalfFinding\Enums\ErrorSeverity', $this->obj);
    }
}
