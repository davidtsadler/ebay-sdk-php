<?php

use DTS\eBaySDK\Trading\Enums\InsuranceSelectedCodeType;

class InsuranceSelectedCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new InsuranceSelectedCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\InsuranceSelectedCodeType', $this->obj);
    }
}
