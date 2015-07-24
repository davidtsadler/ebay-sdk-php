<?php

use DTS\eBaySDK\FileTransfer\Services\FileTransferService;
use DTS\eBaySDK\HttpClient\HttpClient;

class FileTransferServiceTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->service1 = new FileTransferService();
        $this->service2 = new FileTransferService(array());
        $this->service3 = new FileTransferService(array(), new HttpClient());
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Services\FileTransferService', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Services\FileTransferService', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Services\FileTransferService', $this->service3);
    }

    public function testExtendsBaseService()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Services\FileTransferBaseService', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Services\FileTransferBaseService', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Services\FileTransferBaseService', $this->service3);
    }
}
