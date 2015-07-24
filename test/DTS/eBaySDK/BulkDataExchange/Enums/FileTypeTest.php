<?php

use DTS\eBaySDK\BulkDataExchange\Enums\FileType;

class FileTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new FileType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Enums\FileType', $this->obj);
    }
}
