<?php

use DTS\eBaySDK\BulkDataExchange\Enums\RecurringJobStatus;

class RecurringJobStatusTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new RecurringJobStatus();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Enums\RecurringJobStatus', $this->obj);
    }
}
