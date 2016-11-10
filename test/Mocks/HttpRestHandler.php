<?php
namespace DTS\eBaySDK\Test\Mocks;

use Psr\Http\Message\RequestInterface;
use GuzzleHttp\Psr7;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Promise\FulfilledPromise;

class HttpRestHandler
{
    public $url;
    public $headers;
    public $body;

    public function __construct()
    {
    }

    public function __invoke(RequestInterface $request)
    {
        $this->url = $request->getUri();
        $this->headers = [];
        foreach ($request->getHeaders() as $name => $values) {
            $this->headers[$name] = implode(', ', $values);
        }
        $this->body = $request->getBody();

        // Return a fake json response.
        $json = file_get_contents(__DIR__.'/../Mocks/RestResponse.json');

        return new FulfilledPromise(new Response(200, [], Psr7\stream_for($json)));
    }
}
