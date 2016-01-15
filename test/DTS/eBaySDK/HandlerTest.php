<?php
namespace DTS\eBaySDK\Test;

use DTS\eBaySDK\Handler;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;

class HandlerTest extends \PHPUnit_Framework_TestCase
{
    public function testWorksWithSuccessfulRequest()
    {
        $mock = new MockHandler([new Response(200, [], 'OK')]);
        $client = new Client(['handler' => $mock]);
        $handler = new Handler($client);

        $request = new Request('POST', 'http://example.com', [], '');
        $response = $handler($request);
        $this->assertContains('OK', $response);
    }
}

