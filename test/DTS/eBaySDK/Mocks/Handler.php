<?php
namespace DTS\eBaySDK\Mocks;

use Psr\Http\Message\RequestInterface as Psr7Request;

class Handler
{
    public $url;
    public $headers;
    public $body;
    public $returnAttachment = false;

    public function __construct()
    {
    }

    public function __invoke(Psr7Request $request)
    {
        $this->url = $request->getUri();
        $this->headers = [];
        foreach ($request->getHeaders() as $name => $values) {
            $this->headers[$name] = implode(', ', $values);
        }
        $this->body = $request->getBody();
        // Return a fake XML resposne.
        return file_get_contents($this->returnAttachment ? __DIR__.'/../Mocks/AttachmentRequestResponse.xml' : __DIR__.'/../Mocks/Response.xml');
    }
}

