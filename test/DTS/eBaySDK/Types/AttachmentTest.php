<?php
/**
 * THE CODE IN THIS FILE WAS GENERATED FROM THE EBAY WSDL USING THE PROJECT:
 *
 * https://github.com/davidtsadler/ebay-api-sdk-php
 *
 * Copyright 2014 David T. Sadler
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace DTS\eBaySDK\Types\Test;

use DTS\eBaySDK\Mocks\Service;
use DTS\eBaySDK\Mocks\ComplexClass;
use DTS\eBaySDK\Mocks\Handler;

class AttachmentTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        /**
         * Use a class that will fake sending requests and getting responses.
         * The idea is that all the information needed to make the request is
         * passed to the client by the service. What we want to test is that the
         * is actualy passed correctly. We are not testing the sending of the request
         * over the internet.
         * The Handler contains properties that will be set when the service
         * makes the request. We can test these properties to check what the service is passing.
         */
        $this->handler = new Handler();
        // BaseService is abstract so use class that is derived from it for testing.
        $this->service = new Service(['handler' => $this->handler]);
        $this->request = new ComplexClass();
        $this->request->integer = 123;
        $this->request->string = 'a string';
        $this->request->double = 123.45;
        $this->requestXml = rtrim(file_get_contents(__DIR__.'/../Mocks/AttachmentRequestResponse.xml'));
    }

    public function testAttachment()
    {
        $this->assertEquals(array('data' => null, 'mimeType' => null), $this->request->attachment());
        $this->assertEquals(false, $this->request->hasAttachment());

        $this->request->attachment('123ABC');
        $this->assertEquals(array('data' => '123ABC', 'mimeType' => 'application/octet-stream'), $this->request->attachment());
        $this->assertEquals(true, $this->request->hasAttachment());

        $this->request->attachment('ABC123', 'image/jpeg');
        $this->assertEquals(array('data' => 'ABC123', 'mimeType' => 'image/jpeg'), $this->request->attachment());
        $this->assertEquals(true, $this->request->hasAttachment());

        $this->request->attachment(array('data' => '1A2B3C'));
        $this->assertEquals(array('data' => '1A2B3C', 'mimeType' => 'application/octet-stream'), $this->request->attachment());
        $this->assertEquals(true, $this->request->hasAttachment());

        $this->request->attachment(array('data' => 'A1B2C3', 'mimeType' => 'image/jpeg'));
        $this->assertEquals(array('data' => 'A1B2C3', 'mimeType' => 'image/jpeg'), $this->request->attachment());
        $this->assertEquals(true, $this->request->hasAttachment());
    }

    public function testHttpHeadersAreCreated()
    {
        $this->request->attachment('ABC123', 'image/jpeg');
        $this->service->foo($this->request);
        $this->assertArrayHasKey('fooHdr', $this->handler->headers);
        $this->assertEquals('foo', $this->handler->headers['fooHdr']);
        $this->assertArrayHasKey('Content-Type', $this->handler->headers);
        $this->assertEquals('multipart/related;boundary=MIME_boundary;type="application/xop+xml";start="<request.xml@devbay.net>";start-info="text/xml"', $this->handler->headers['Content-Type']);
        $this->assertArrayHasKey('Content-Length', $this->handler->headers);
        $this->assertEquals(strlen($this->requestXml), $this->handler->headers['Content-Length']);
    }

    public function testXmlIsCreated()
    {
        $this->request->attachment('ABC123', 'image/jpeg');
        $this->service->foo($this->request);
        $this->assertEquals($this->requestXml, $this->handler->body);
    }

    public function testResponseIsReturned()
    {
        $this->handler->returnAttachment = true;
        $response = $this->service->bar($this->request);
        $this->assertInstanceOf('\DTS\eBaySDK\Mocks\ComplexClass', $response);
        $this->assertEquals(123, $response->integer);
        $this->assertEquals('a string', $response->string);
        $this->assertEquals(123.45, $response->double);

        $this->assertEquals(array('data' => 'ABC123', 'mimeType' => 'image/jpeg'), $response->attachment());
    }
}

