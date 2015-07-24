<?php
/**
 * Copyright 2014 David T. Sadler
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace DTS\eBaySDK\HttpClient;

use Guzzle\Http\Client;

/**
 * Implements the sending of a request to eBay.
 *
 * A class to allow users of the SDK to get quickly up an running.
 * In practice users of the SDK should create their own classes
 * that implement the HttpClientInterface.
 */
class HttpClient implements \DTS\eBaySDK\Interfaces\HttpClientInterface
{
    /**
     * @var Guzzle\Http\Client Client that will actualy send the POST request.
     */
    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function post($url, $headers, $body)
    {
        return $this->client->post($url, $headers, $body)->send()->getBody(true);
    }

    public function guzzle()
    {
        return $this->client;
    }
}
