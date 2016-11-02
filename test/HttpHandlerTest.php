<?php
namespace DTS\eBaySDK\Test;

use DTS\eBaySDK\HttpHandler;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;

class HttpHandlerTest extends \PHPUnit_Framework_TestCase
{
    public function testWorksWithSuccessfulRequest()
    {
        $mock = new MockHandler([new Response(200, [], 'OK')]);
        $client = new Client(['handler' => $mock]);
        $httpHandler = new HttpHandler($client);

        $request = new Request('POST', 'http://example.com', [], '');
        $response = $httpHandler($request, [])->wait()->getBody()->getContents();
        $this->assertContains('OK', $response);
    }

    public function testWorksWithFailedRequest()
    {
        $mock = new MockHandler([new \Exception('FAIL')]);
        $client = new Client(['handler' => $mock]);
        $httpHandler = new HttpHandler($client);

        $request = new Request('POST', 'http://example.com', [], '');
        try {
            $httpHandler($request, [])->wait();
            $this->fail();
        } catch (\Exception $e) {
            $this->assertContains('FAIL', $e->getMessage());
        }
    }
}
