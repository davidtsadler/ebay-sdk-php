<?php
namespace DTS\eBaySDK;

trait StatusCodeTrait
{
    /**
     * @var int The response status code.
     */
    private $statusCode;

    /**
     * Gets the response status code.
     *
     * The status code is a 3-digit integer result code of the server's attempt
     * to understand and satisfy the request.
     *
     * @return int Status code.
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }
}
