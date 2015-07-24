<?php

use DTS\eBaySDK\Shopping\Enums\ErrorClassificationCodeType;

class ErrorClassificationCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ErrorClassificationCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Enums\ErrorClassificationCodeType', $this->obj);
    }
}
