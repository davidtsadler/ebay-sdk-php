<?php

use DTS\eBaySDK\Finding\Enums\ErrorSeverity;

class ErrorSeverityTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ErrorSeverity();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Enums\ErrorSeverity', $this->obj);
    }
}
