<?php
namespace DTS\eBaySDK\BulkDataExchange\Mocks;

use DTS\eBaySDK\Mocks\ComplexClass;

class Service extends \DTS\eBaySDK\BulkDataExchange\Services\BulkDataExchangeBaseService
{
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function testOperation()
    {
        return $this->callOperation(
            'testOperation',
            new ComplexClass(),
            '\DTS\eBaySDK\Mocks\ComplexClass'
        );
    }
}

