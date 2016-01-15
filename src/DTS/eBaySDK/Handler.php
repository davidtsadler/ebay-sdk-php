<?php
namespace DTS\eBaySDK;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\RequestInterface as Psr7Request;

/**
 * @internal Sends PSR-7-compatible requests using a Guzzle client.
 */
class Handler
{
    /** 
     * @var ClientInterface 
     */
    private $client;

    /**
     * @param ClientInterface $client
     */
    public function __construct(ClientInterface $client = null)
    {
        $this->client = $client ?: new Client();
    }

    /**
     * @param Psr7Request $request
     *
     * @return string Body of the response
     */
    public function __invoke(Psr7Request $request)
    {
        return $this->client->send($request)->getBody()->getContents();
    }
}

