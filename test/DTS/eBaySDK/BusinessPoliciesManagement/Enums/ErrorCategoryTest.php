<?php

use DTS\eBaySDK\BusinessPoliciesManagement\Enums\ErrorCategory;

class ErrorCategoryTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ErrorCategory();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BusinessPoliciesManagement\Enums\ErrorCategory', $this->obj);
    }
}
