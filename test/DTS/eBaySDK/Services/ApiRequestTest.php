<?php
use DTS\eBaySDK\Mocks\Service;
use DTS\eBaySDK\Mocks\ComplexClass;
use DTS\eBaySDK\Mocks\HttpClient;
use DTS\eBaySDK\Mocks\Logger;

class ApiRequestTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        /**
         * Use a class that will fake sending requests and getting responses.
         * The idea is that all the information needed to make the request is
         * passed to the client by the service. What we want to test is that the
         * is actualy passed correctly. We are not testing the sending of the request
         * over the internet.
         * The HttpClient contains properties that will be set when the service
         * makes the request. We can test these properties to check what the service is passing.
         */
        $this->httpClient = new HttpClient();
        // BaseService is abstract so use class that is derived from it for testing.
        $this->service = new Service(array(), $this->httpClient);
        $this->request = new ComplexClass();
        $this->logger = new Logger();
    }

    public function testProductionUrlIsUsed()
    {
        // By default sandbox will be false.
        $this->service->foo($this->request);
        $this->assertEquals('http://production.com', $this->httpClient->url);
    }

    public function testSandboxUrlIsUsed()
    {
        $this->service->config('sandbox', true);
        $this->service->foo($this->request);
        $this->assertEquals('http://sandbox.com', $this->httpClient->url);
    }

    public function testHttpHeadersAreCreated()
    {
        $this->service->foo($this->request);
        $this->assertEquals(array(
            'fooHdr' => 'foo',
            'Content-Type' => 'text/xml',
            'Content-Length' => strlen($this->request->toRequestXml())
        ), $this->httpClient->headers);
    }

    public function testXmlIsCreated()
    {
        $this->service->foo($this->request);
        $this->assertEquals($this->request->toRequestXml(), $this->httpClient->body);
    }

    public function testResponseIsReturned()
    {
        $response = $this->service->foo($this->request);
        $this->assertInstanceOf('\DTS\eBaySDK\Mocks\ComplexClass', $response);
    }

    public function testLogging()
    {
        // If no logger has been assigned there should be no debug messages.
        $this->assertEquals(null, $this->service->logger());
        $this->service->foo($this->request);
        $this->assertEquals(0, count($this->logger->debugMessages));

        // Even if the configuration is set to log debugging.
        $this->assertEquals(null, $this->service->logger());
        $this->service->config('debug', true);
        $this->service->foo($this->request);
        $this->assertEquals(0, count($this->logger->debugMessages));

        // Now check that debugging information is logged.
        $this->service->logger($this->logger);
        $this->service->config('debug', true);
        $this->service->foo($this->request);

        $debugRequest = $this->logger->debugMessages[0];
        $this->assertEquals('Request', $debugRequest['message']);
        $this->assertEquals('http://production.com', $debugRequest['context']['url']);
        $this->assertEquals('foo', $debugRequest['context']['name']);
        $this->assertEquals(array(
            'fooHdr' => 'foo',
            'Content-Type' => 'text/xml',
            'Content-Length' => strlen($this->request->toRequestXml())
        ), $debugRequest['context']['headers']);
        $this->assertEquals($this->request->toRequestXml(), $debugRequest['context']['body']);

        $debugResponse = $this->logger->debugMessages[1];
        $this->assertEquals('Response', $debugResponse['message']);
        $this->assertEquals(file_get_contents(__DIR__.'/../Mocks/Response.xml'), $debugResponse['context']['body']);
    }
}
