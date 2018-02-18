<?php
namespace DTS\eBaySDK\Types\Test;

use DTS\eBaySDK\Test\Mocks\Service;
use DTS\eBaySDK\Test\Mocks\ComplexClass;
use DTS\eBaySDK\Test\Mocks\HttpHandler;

class AttachmentTest extends \PHPUnit_Framework_TestCase
{
    private $httpHandler;
    private $service;
    private $request;
    private $requestXml;

    protected function setUp()
    {
        /**
         * Use a class that will fake sending requests and getting responses.
         * The idea is that all the information needed to make the request is
         * passed to the client by the service. What we want to test is that the
         * is actually passed correctly. We are not testing the sending of the request
         * over the internet.
         * The HttpHandler contains properties that will be set when the service
         * makes the request. We can test these properties to check what the service is passing.
         */
        $this->httpHandler = new HttpHandler();
        // BaseService is abstract so use class that is derived from it for testing.
        $this->service = new Service(['httpHandler' => $this->httpHandler]);
        $this->request = new ComplexClass();
        $this->request->integer = 123;
        $this->request->string = 'a string';
        $this->request->double = 123.45;
        $this->requestXml = rtrim(file_get_contents(__DIR__.'/../Mocks/AttachmentRequestResponse.xml'));
    }

    public function testAttachment()
    {
        $this->assertEquals(['data' => null, 'mimeType' => null], $this->request->attachment());
        $this->assertEquals(false, $this->request->hasAttachment());

        $this->request->attachment('123ABC');
        $this->assertEquals(['data' => '123ABC', 'mimeType' => 'application/octet-stream'], $this->request->attachment());
        $this->assertEquals(true, $this->request->hasAttachment());

        $this->request->attachment('ABC123', 'image/jpeg');
        $this->assertEquals(['data' => 'ABC123', 'mimeType' => 'image/jpeg'], $this->request->attachment());
        $this->assertEquals(true, $this->request->hasAttachment());

        $this->request->attachment(['data' => '1A2B3C']);
        $this->assertEquals(['data' => '1A2B3C', 'mimeType' => 'application/octet-stream'], $this->request->attachment());
        $this->assertEquals(true, $this->request->hasAttachment());

        $this->request->attachment(['data' => 'A1B2C3', 'mimeType' => 'image/jpeg']);
        $this->assertEquals(['data' => 'A1B2C3', 'mimeType' => 'image/jpeg'], $this->request->attachment());
        $this->assertEquals(true, $this->request->hasAttachment());
    }

    public function testHttpHeadersAreCreated()
    {
        $this->request->attachment('ABC123', 'image/jpeg');
        $this->service->foo($this->request);
        $this->assertArrayHasKey('fooHdr', $this->httpHandler->headers);
        $this->assertEquals('foo', $this->httpHandler->headers['fooHdr']);
        $this->assertArrayHasKey('Content-Type', $this->httpHandler->headers);
        $this->assertEquals('multipart/related;boundary=MIME_boundary;type="application/xop+xml";start="<request.xml@devbay.net>";start-info="text/xml"', $this->httpHandler->headers['Content-Type']);
        $this->assertArrayHasKey('Content-Length', $this->httpHandler->headers);
        $this->assertEquals(strlen($this->requestXml), $this->httpHandler->headers['Content-Length']);
    }

    public function testXmlIsCreated()
    {
        $this->request->attachment('ABC123', 'image/jpeg');
        $this->service->foo($this->request);
        $this->assertEquals($this->requestXml, $this->httpHandler->body);
    }

    public function testResponseIsReturned()
    {
        $this->httpHandler->returnAttachment = true;
        $response = $this->service->bar($this->request);
        $this->assertInstanceOf('\DTS\eBaySDK\Test\Mocks\ComplexClass', $response);
        $this->assertEquals(123, $response->integer);
        $this->assertEquals('a string', $response->string);
        $this->assertEquals(123.45, $response->double);

        $this->assertEquals(['data' => 'ABC123', 'mimeType' => 'image/jpeg'], $response->attachment());
    }
}
