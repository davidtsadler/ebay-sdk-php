<?php
namespace DTS\eBaySDK\ReturnManagement\Mocks;

use DTS\eBaySDK\Mocks\ComplexClass;

class Service extends \DTS\eBaySDK\ReturnManagement\Services\ReturnManagementBaseService
{
    public function __construct($config = array(), \DTS\eBaySDK\Interfaces\HttpClientInterface $httpClient = null)
    {
        parent::__construct($config, $httpClient);
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
