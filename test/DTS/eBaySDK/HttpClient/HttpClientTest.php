<?php

use DTS\eBaySDK\HttpClient\HttpClient;

class HttpClientTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->obj = new HttpClient();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\HttpClient\HttpClient', $this->obj);
    }

    public function testImplementsHttpClientInterface()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Interfaces\HttpClientInterface', $this->obj);
    }

    public function testGuzzle()
    {
        $this->assertInstanceOf('\Guzzle\Http\Client', $this->obj->guzzle());
    }
}
