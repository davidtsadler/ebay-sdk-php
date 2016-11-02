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
     * @var array
     */
    private static $validOptions = [
        'connect_timeout' => true,
        'debug'           => true,
        'delay'           => true,
        'proxy'           => true,
        'timeout'         => true,
        'verify'          => true
    ];

    /**
     * @param ClientInterface $client
     */
    public function __construct(ClientInterface $client = null)
    {
        $this->client = $client ?: new Client();
    }

    /**
     * @param Psr7Request|RequestInterface $request
     * @param array $options Http options for the client.
     * @return \GuzzleHttp\Promise\PromiseInterface Promise that will be resolved with a
     *                                             Psr\Http\Message\ResponseInterface
     * response object.
     */
    public function __invoke(RequestInterface $request, array $options)
    {
        // Remove options that are not supported.
        foreach (array_keys($options) as $key) {
            if (!isset(self::$validOptions[$key])) {
                unset($options[$key]);
            }
        }

        return $this->client->sendAsync($request, $options);
    }
}
