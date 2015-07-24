<?php

use DTS\eBaySDK\ResolutionCaseManagement\Enums\RefundStatusType;

class RefundStatusTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new RefundStatusType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Enums\RefundStatusType', $this->obj);
    }
}
