<?php
namespace DTS\eBaySDK\Test\Mocks;

use DTS\eBaySDK\StatusCodeTrait;

class StatusCode
{
    use StatusCodeTrait;

    public function __construct($statusCode)
    {
        $this->statusCode = $statusCode;
    }
}
