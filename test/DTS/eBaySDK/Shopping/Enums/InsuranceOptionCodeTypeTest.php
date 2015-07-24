<?php

use DTS\eBaySDK\Shopping\Enums\InsuranceOptionCodeType;

class InsuranceOptionCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new InsuranceOptionCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Enums\InsuranceOptionCodeType', $this->obj);
    }
}
