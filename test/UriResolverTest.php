<?php
namespace DTS\eBaySDK\Test;

use DTS\eBaySDK\UriResolver;
use DTS\eBaySDK\Test\Mocks\StaticMethods;

class UriResolverTest extends \PHPUnit_Framework_TestCase
{
    public function testDefaults()
    {
        $r = new UriResolver();

        $paramDefs = [
            'array' => [
                'valid' => ['array'],
                'default' => ['foo', 'bar']
            ],
            'bool' => [
                'valid' => ['bool'],
                'default' => true
            ],
            'callable' => [
                'valid' => ['int'],
                'default' => [StaticMethods::class, 'defaultConfigValue']
            ],
            'int' => [
                'valid' => ['int'],
                'default' => -1
            ],
            'string' => [
                'valid' => ['string'],
                'default' => 'foo'
            ]
        ];

        $paramValues = [];

        $this->assertEquals(
            'https://example.com/v1/item?array=foo%2Cbar&bool=true&callable=-1&int=-1&string=foo',
            $r->resolve('https://example.com', 'v1', 'item', $paramDefs, $paramValues)
        );
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Missing required uri parameters
     */
    public function testRequired()
    {
        $r = new UriResolver();

        $paramDefs = [
            'foo' => [
                'valid' => ['int'],
                'required' => true
            ]
        ];

        $paramValues = [];

        $r->resolve('https://example.com', 'v1', 'item', $paramDefs, $paramValues);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid uri parameter value provided for "foo". Expected array, but got int(-1)
     */
    public function testValidatesArray()
    {
        $r = new UriResolver();

        $paramDefs = [
            'foo' => [
                'valid' => ['array']
            ]
        ];

        $paramValues = [
            'foo' => -1
        ];

        $r->resolve('https://example.com', 'v1', 'item', $paramDefs, $paramValues);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid uri parameter value provided for "foo". Expected bool, but got int(-1)
     */
    public function testValidatesBool()
    {
        $r = new UriResolver();

        $paramDefs = [
            'foo' => [
                'valid' => ['bool']
            ]
        ];

        $paramValues = [
            'foo' => -1
        ];

        $r->resolve('https://example.com', 'v1', 'item', $paramDefs, $paramValues);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid uri parameter value provided for "foo". Expected callable, but got int(-1)
     */
    public function testValidatesCallable()
    {
        $r = new UriResolver();

        $paramDefs = [
            'foo' => [
                'valid' => ['callable']
            ]
        ];

        $paramValues = [
            'foo' => -1
        ];

        $r->resolve('https://example.com', 'v1', 'item', $paramDefs, $paramValues);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid uri parameter value provided for "foo". Expected int, but got string(3)
     */
    public function testValidatesInt()
    {
        $r = new UriResolver();

        $paramDefs = [
            'foo' => [
                'valid' => ['int']
            ]
        ];

        $paramValues = [
            'foo' => 'foo'
        ];

        $r->resolve('https://example.com', 'v1', 'item', $paramDefs, $paramValues);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid uri parameter value provided for "foo". Expected string, but got int(-1)
     */
    public function testValidatesStrings()
    {
        $r = new UriResolver();

        $paramDefs = [
            'foo' => [
                'valid' => ['string']
            ]
        ];

        $paramValues = [
            'foo' => -1
        ];

        $r->resolve('https://example.com', 'v1', 'item', $paramDefs, $paramValues);
    }

    public function testAllowsValid()
    {
        $r = new UriResolver();

        $paramDefs = [
            'array' => [
                'valid' => ['array']
            ],
            'bool' => [
                'valid' => ['bool']
            ],
            'callable' => [
                'valid' => ['callable']
            ],
            'int' => [
                'valid' => ['int']
            ],
            'string' => [
                'valid' => ['string']
            ]
        ];

        $paramValues = [
            'array' => [],
            'bool' => true,
            'callable' => function () {
            },
            'int' => 1,
            'string' => 'foo'
        ];

        $this->assertEquals(
            'https://example.com/v1/item?array=&bool=true&callable=&int=1&string=foo',
            $r->resolve('https://example.com', 'v1', 'item', $paramDefs, $paramValues)
        );
    }

    public function testFn()
    {
        $r = new UriResolver();

        $paramDefs = [
            'foo' => [
                'valid' => ['int'],
                'fn' => [StaticMethods::class, 'applyConfigValue']
            ]
        ];

        $paramValues = [
            'foo' => 1
        ];

        $this->assertEquals(
            'https://example.com/v1/item?foo=3',
            $r->resolve('https://example.com', 'v1', 'item', $paramDefs, $paramValues)
        );
    }

    public function testFillsInPathParameters()
    {
        $r = new UriResolver();

        $paramDefs = [
            'path1' => [
                'valid' => ['string']
            ],
            'path2' => [
                'valid' => ['string']
            ],
            'param1' => [
                'valid' => ['string']
            ],
            'param2' => [
                'valid' => ['string']
            ]
        ];

        $paramValues = [
            'path1' => 'foo',
            'path2' => 'bar',
            'param1' => 'baz',
            'param2' => 'shaz'
        ];

        $this->assertEquals(
            'https://example.com/v1/item/foo/bar?param1=baz&param2=shaz',
            $r->resolve('https://example.com', 'v1', 'item/{path1}/{path2}', $paramDefs, $paramValues)
        );
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Unknown uri parameter "bar" provided
     */
    public function testParamMustExist()
    {
        $r = new UriResolver();

        $paramDefs = [
            'foo' => [
                'valid' => ['string']
            ]
        ];

        $paramValues = [
            'bar' => -1
        ];

        $r->resolve('https://example.com', 'v1', 'item', $paramDefs, $paramValues);
    }

    public function testNoParams()
    {
        $r = new UriResolver();

        $paramDefs = [
        ];

        $paramValues = [
        ];

        $this->assertEquals(
            'https://example.com/v1/item',
            $r->resolve('https://example.com', 'v1', 'item', $paramDefs, $paramValues)
        );
    }
}
