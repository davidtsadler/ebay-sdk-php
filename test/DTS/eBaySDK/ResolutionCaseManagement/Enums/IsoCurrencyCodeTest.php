<?php

use DTS\eBaySDK\ResolutionCaseManagement\Enums\IsoCurrencyCode;

class IsoCurrencyCodeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new IsoCurrencyCode();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Enums\IsoCurrencyCode', $this->obj);
    }
}
