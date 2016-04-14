<?php
namespace DTS\eBaySDK\Test\Mocks;

use Psr\Http\Message\RequestInterface;
use GuzzleHttp\Psr7;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Promise\FulfilledPromise;

class Handler
{
    public $url;
    public $headers;
    public $body;
    public $returnAttachment = false;

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

        // Return a fake XML response.
        $xml = file_get_contents(
            $this->returnAttachment ?
            __DIR__.'/../Mocks/AttachmentRequestResponse.xml'
            :
            __DIR__.'/../Mocks/Response.xml'
        );

        return new FulfilledPromise(new Response(200, [], Psr7\stream_for($xml)));
    }
}
