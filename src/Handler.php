<?php
namespace DTS\eBaySDK;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\RequestInterface;
use GuzzleHttp\Promise;

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
    public function __invoke(RequestInterface $request)
    {
        return $this->client->sendAsync($request);
    }
}
