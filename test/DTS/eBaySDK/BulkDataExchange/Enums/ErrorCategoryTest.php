<?php

use DTS\eBaySDK\BulkDataExchange\Enums\ErrorCategory;

class ErrorCategoryTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ErrorCategory();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Enums\ErrorCategory', $this->obj);
    }
}
