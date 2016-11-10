<?php
namespace DTS\eBaySDK\Test\Mocks;

use DTS\eBaySDK\HttpHeadersTrait;

class HttpHeaders
{
    use HttpHeadersTrait;

    public function __construct(array $headers)
    {
        $this->setHeaders($headers);
    }
}
