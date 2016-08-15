<?php
namespace DTS\eBaySDK\Types\Test;

use DTS\eBaySDK\Test\Mocks\ComplexClass;
use DTS\eBaySDK\Test\Mocks\SimpleClass;

class SearchTest extends \PHPUnit_Framework_TestCase
{
    public function testCanSearch()
    {
        $foo = new SimpleClass([
           'string' => 'foo'
        ]);
        $bar = new SimpleClass([
            'string' => 'bar'
        ]);
        $baz = new SimpleClass([
            'string' => 'baz'
        ]);
        $obj = new ComplexClass();
        $obj->integers = [1, 2, 3];
        $obj->strings = ['foo', 'bar'];
        $obj->simpleClasses = [
            $foo,
            $bar,
            $baz
        ];

        $this->assertEquals(2, $obj->search('integers[1]'));
        $this->assertEquals('bar', $obj->search('strings[1]'));
        $this->assertEquals('foo', $obj->search('simpleClasses[0].string'));
        $this->assertEquals(3, $obj->search('length(simpleClasses)'));
        $this->assertEquals(['bar', 'baz'], $obj->search('simpleClasses[1:].string'));
        $this->assertEquals(['foo', 'baz'], $obj->search("simpleClasses[?string=='baz'|| string=='foo'].string"));
        $this->assertEquals([$bar, $baz], $obj->search('simpleClasses[1:]'));
        $this->assertEquals([$foo, $baz], $obj->search("simpleClasses[?string=='baz'|| string=='foo']"));
        $this->assertEquals([
            ['name' => 'foo'],
            ['name' => 'bar'],
            ['name' => 'baz']
        ], $obj->search("simpleClasses[].{name: string}"));
    }
}
