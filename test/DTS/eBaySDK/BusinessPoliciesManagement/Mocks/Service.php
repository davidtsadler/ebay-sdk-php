<?php
namespace DTS\eBaySDK\BusinessPoliciesManagement\Mocks;

use DTS\eBaySDK\Mocks\ComplexClass;

class Service extends \DTS\eBaySDK\BusinessPoliciesManagement\Services\BusinessPoliciesManagementBaseService
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

