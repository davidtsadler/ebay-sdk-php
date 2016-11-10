<?php
namespace DTS\eBaySDK\Test\Mocks;

class RestService extends \DTS\eBaySDK\Test\Mocks\BaseRestService
{
    protected static $operations =  [
        'foo' => [
            'method' => 'GET',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\Test\Mocks\ComplexClass',
            'params' => [
            ]
        ]
    ];

    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function foo(\DTS\eBaySDK\Test\Mocks\ComplexClass $request)
    {
        return $this->callOperationAsync('foo', $request)->wait();
    }
}
