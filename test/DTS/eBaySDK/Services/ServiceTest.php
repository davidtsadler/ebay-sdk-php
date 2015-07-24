<?php
use DTS\eBaySDK\Mocks\Service;
use DTS\eBaySDK\Mocks\HttpClient;
use DTS\eBaySDK\Mocks\Logger;

class ServiceTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        // BaseService is abstract so use class that is derived from it for testing.
        $this->service1 = new Service();
        $this->service2 = new Service(array());
        $this->service3 = new Service(array(), new HttpClient());
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Mocks\Service', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\Mocks\Service', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\Mocks\Service', $this->service3);
    }

    public function testExtendsMockBaseService()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Mocks\BaseService', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\Mocks\BaseService', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\Mocks\BaseService', $this->service3);
    }

    public function testExtendsBaseService()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Services\BaseService', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\Services\BaseService', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\Services\BaseService', $this->service3);
    }
  
    public function testCanAssignALogger()
    {
        // By default no logger should be assigned.
        $this->assertEquals(null, $this->service1->logger());

        // Allows a logger to be assigned.
        $this->service1->logger(new Logger());

        // Should return the assigned logger.
        $this->assertInstanceOf('\DTS\eBaySDK\Mocks\Logger', $this->service1->logger());
    } 

    public function testHttpClient()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Interfaces\HttpClientInterface', $this->service1->httpClient());
        $this->assertInstanceOf('\DTS\eBaySDK\HttpClient\HttpClient', $this->service1->httpClient());

        $this->assertInstanceOf('\DTS\eBaySDK\Interfaces\HttpClientInterface', $this->service2->httpClient());
        $this->assertInstanceOf('\DTS\eBaySDK\HttpClient\HttpClient', $this->service2->httpClient());

        $this->assertInstanceOf('\DTS\eBaySDK\Interfaces\HttpClientInterface', $this->service3->httpClient());
        $this->assertInstanceOf('\DTS\eBaySDK\Mocks\HttpClient', $this->service3->httpClient());
    }
}
