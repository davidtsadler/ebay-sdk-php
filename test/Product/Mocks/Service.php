<?php
namespace DTS\eBaySDK\Test\Product\Mocks;

use DTS\eBaySDK\Test\Mocks\ComplexClass;

class Service extends \DTS\eBaySDK\Product\Services\ProductBaseService
{
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function testOperation()
    {
        return $this->callOperationAsync(
            'testOperation',
            new ComplexClass(),
            '\DTS\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }
}
