<?php
use DTS\eBaySDK\FileTransfer\Services\FileTransferBaseService;
use DTS\eBaySDK\Mocks\HttpClient;

class FileTransferBaseServiceTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->service1 = new FileTransferBaseService();
        $this->service2 = new FileTransferBaseService(array());
        $this->service3 = new FileTransferBaseService(array(), new HttpClient());
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Services\FileTransferBaseService', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Services\FileTransferBaseService', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Services\FileTransferBaseService', $this->service3);
    }

    public function testExtendsBaseService()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Services\BaseService', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\Services\BaseService', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\Services\BaseService', $this->service3);
    }
}
