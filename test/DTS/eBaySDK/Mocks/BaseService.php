<?php
namespace DTS\eBaySDK\Mocks;

class BaseService extends \DTS\eBaySDK\Services\BaseService
{
    public function __construct($config, \DTS\eBaySDK\Interfaces\HttpClientInterface $httpClient = null)
    {
        parent::__construct('http://production.com', 'http://sandbox.com', $config, $httpClient);
    }

    protected function getEbayHeaders($operationName)
    {
        return array('fooHdr' => $operationName);
    }
}
