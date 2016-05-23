<?php
namespace DTS\eBaySDK;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\RequestInterface;

/**
 * @internal Sends PSR-7-compatible requests using a Guzzle client.
 */
class HttpHandler
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
     * @return GuzzleHttp\Promise\PromiseInterface Promise that will be resolved with a
     *                                             Psr\Http\Message\ResponseInterface
     *                                             response object.
     */
    public function __invoke(RequestInterface $request)
    {
        return $this->client->sendAsync($request);
    }
}
