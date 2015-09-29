<?php
namespace DTS\eBaySDK\Test;

use DTS\eBaySDK\ConfigurationResolver;

class ConfigurationResolverTest extends \PHPUnit_Framework_TestCase
{
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
            'string' => [
                'valid' => ['string']
            ]
        ]);

        $options = [
            'array' => [],
            'bool' => true,
            'callable' => function () {},
            'int' => 1,
            'string' => 'foo'
        ];

        $this->assertEquals($r->resolve($options), $options);
    }
}
