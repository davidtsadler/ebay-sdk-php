<?php
namespace DTS\eBaySDK\Mocks;

use Psr\Http\Message\RequestInterface as Psr7Request;

class Handler
{
    public $returnAttachment = false;

    public function __construct()
    {
    }

    public function __invoke(Psr7Request $request)
    {
        // Return a fake XML resposne.
        return file_get_contents($this->returnAttachment ? __DIR__.'/../Mocks/AttachmentRequestResponse.xml' : __DIR__.'/../Mocks/Response.xml');
    }
}

