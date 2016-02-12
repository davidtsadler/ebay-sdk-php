<?php
namespace DTS\eBaySDK\Test;

use DTS\eBaySDK\ConfigurationResolver;
use DTS\eBaySDK\Mocks\StaticMethods;

class ConfigurationResolverTest extends \PHPUnit_Framework_TestCase
{
    public function testDefaults()
    {
        $r = new ConfigurationResolver([
            'array' => [
                'valid' => ['array'],
                'default' => ['foo']
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
        ]);

        $this->assertEquals($r->resolve([]), [
            'array' => ['foo'],
            'bool' => true,
            'callable' => -1,
            'int' => -1,
            'string' => 'foo',
        ]);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Missing required configuration options
     */
    public function testRequired()
    {
        $r = new ConfigurationResolver([
            'foo' => [
                'valid' => ['int'],
                'required' => true
            ]
        ]);
        $r->resolve([]);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid configuration value provided for "foo". Expected array, but got int(-1)
     */
    public function testValidatesArray()
    {
        $r = new ConfigurationResolver([
            'foo' => [
                'valid' => ['array']
            ]
        ]);
        $r->resolve(['foo' => -1]);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid configuration value provided for "foo". Expected bool, but got int(-1)
     */
    public function testValidatesBool()
    {
        $r = new ConfigurationResolver([
            'foo' => [
                'valid' => ['bool']
            ]
        ]);
        $r->resolve(['foo' => -1]);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid configuration value provided for "foo". Expected callable, but got int(-1)
     */
    public function testValidatesCallable()
    {
        $r = new ConfigurationResolver([
            'foo' => [
                'valid' => ['callable']
            ]
        ]);
        $r->resolve(['foo' => -1]);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid configuration value provided for "foo". Expected StdClass, but got int(-1)
     */
    public function testValidatesInstanceOf()
    {
        $r = new ConfigurationResolver([
            'foo' => [
                'valid' => ['StdClass']
            ]
        ]);
        $r->resolve(['foo' => -1]);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid configuration value provided for "foo". Expected int, but got string(3)
     */
    public function testValidatesInt()
    {
        $r = new ConfigurationResolver([
            'foo' => [
                'valid' => ['int']
            ]
        ]);
        $r->resolve(['foo' => 'foo']);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid configuration value provided for "foo". Expected string, but got int(-1)
     */
    public function testValidatesStrings()
    {
        $r = new ConfigurationResolver([
            'foo' => [
                'valid' => ['string']
            ]
        ]);
        $r->resolve(['foo' => -1]);
    }

    public function testAllowsValid()
    {
        $r = new ConfigurationResolver([
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
            'stdClass' => [
                'valid' => ['StdClass']
            ],
            'string' => [
                'valid' => ['string']
            ]
        ]);

        $options = [
            'array' => [],
            'bool' => true,
            'callable' => function () {
            },
            'int' => 1,
            'stdClass' => new \StdClass(),
            'string' => 'foo'
        ];

        $this->assertEquals($r->resolve($options), $options);
    }

    public function testFn()
    {
        $r = new ConfigurationResolver([
            'foo' => [
                'valid' => ['int'],
                'fn' => [StaticMethods::class, 'applyConfigValue']
            ]
        ]);
        $this->assertEquals($r->resolve(['foo' => 1]), ['foo' => 3]);
    }
}
