<?php

use DTS\eBaySDK\BulkDataExchange\Enums\JobStatus;

class JobStatusTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new JobStatus();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Enums\JobStatus', $this->obj);
    }
}
