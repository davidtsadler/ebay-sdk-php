<?php
namespace DTS\eBaySDK\Types\Test;

use DTS\eBaySDK\Trading\Services;
use DTS\eBaySDK\Trading\Types;
use DTS\eBaySDK\Test\Mocks\HttpHandler;

class MultipartFormDataTest extends \PHPUnit_Framework_TestCase
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
        $this->service = new Services\TradingService([
            'apiVersion' => '123',
            'credentials' => ['appId' => '', 'certId' => '', 'devId' => ''],
            'siteId' => 0,
            'httpHandler' => $this->httpHandler
        ]);
        $this->request = new Types\UploadSiteHostedPicturesRequestType();
        $this->request->PictureName = 'Example Picture';
        $this->requestXml = rtrim(file_get_contents(__DIR__.'/../../Mocks/MultipartFormDataRequest'));
    }

    public function testHttpHeadersAreCreated()
    {
        $this->request->attachment('ABC123', 'image/jpeg');
        $this->service->uploadSiteHostedPictures($this->request);
        $this->assertArrayHasKey('Content-Type', $this->httpHandler->headers);
        $this->assertEquals('multipart/form-data;boundary="boundary"', $this->httpHandler->headers['Content-Type']);
        $this->assertArrayHasKey('Content-Length', $this->httpHandler->headers);
        $this->assertEquals(strlen($this->requestXml), $this->httpHandler->headers['Content-Length']);
    }

    public function testMultipartFormDataIsCreated()
    {
        $this->request->attachment('ABC123', 'image/jpeg');
        $this->service->uploadSiteHostedPictures($this->request);
        $this->assertEquals($this->requestXml, $this->httpHandler->body);
    }
}
