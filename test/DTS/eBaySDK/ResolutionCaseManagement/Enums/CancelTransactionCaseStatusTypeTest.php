<?php

use DTS\eBaySDK\ResolutionCaseManagement\Enums\CancelTransactionCaseStatusType;

class CancelTransactionCaseStatusTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CancelTransactionCaseStatusType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Enums\CancelTransactionCaseStatusType', $this->obj);
    }
}
