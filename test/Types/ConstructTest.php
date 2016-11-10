<?php
namespace DTS\eBaySDK\Types\Test;

use DTS\eBaySDK\Test\Mocks\AmountClass;
use DTS\eBaySDK\Test\Mocks\ComplexClass;
use DTS\eBaySDK\Test\Mocks\SimpleClass;

class ConstructTest extends \PHPUnit_Framework_TestCase
{
    public function testSettingPropertiesViaCtor()
    {
        $values = [
            'foo' => 'foo',
            'integer' => 123,
            'double' => 123.45,
            'booleanTrue' => true,
            'booleanFalse' => false,
            'DateTime' => '2000-01-01T00:00:00.000Z',
            /**
             * Wouldn't do this in client code.
             * Can pass the same field multiple times. The value is just assigned over the previous one.
             * All we are doing here is testing that different types can be passed to the field
             * and it will be handled correctly by the code.
             */
            'DateTime' => new \DateTime('2000-01-01T00:00:00.000Z', new \DateTimeZone('UTC')),
            'strings' => ['foo', 'bar'],
            'integers' => [111, 222],
            'AmountClass' => [
                'value' => 543.21,
                'AttributeOne' => 'one'
            ],
            'AmountClass' => new AmountClass(['value' => 543.21, 'AttributeOne' => 'one']),
            'SimpleClass' => [
                'integer' => 123,
                'string' => 'foo',
                'double' => 123.45,
                'booleanTrue' => true,
                'booleanFalse' => false,
                'DateTime' => new \DateTime('2000-01-01T00:00:00.000Z', new \DateTimeZone('UTC')),
                'integers' => [100, 200, 300]
            ],
            'simpleClasses' => [
                [
                    'integer' => 321,
                    'string' => 'bar',
                    'double' => 5432.10,
                    'booleanTrue' => true,
                    'booleanFalse' => false,
                    'DateTime' => '2015-01-01T00:00:00.000Z'
                ],
                new SimpleClass([
                    'integers' => [300, 200, 100],
                    'strings' => ['foo', 'bar']
                ]),
                new SimpleClass()
            ],
            'decimalTypes' => [
                ['value' => 1],
                ['value' => 2.34]
            ],
            'anyType' => 1,
            'anyTypes' => [
                1,
                'foo'
            ]
        ];

        $obj = new ComplexClass($values);

        $this->assertEquals('foo', $obj->foo);
        $this->assertInternalType('string', $obj->foo);

        $this->assertEquals(123, $obj->integer);
        $this->assertInternalType('integer', $obj->integer);

        $this->assertEquals(123.45, $obj->double);
        $this->assertInternalType('float', $obj->double);

        $this->assertEquals(true, $obj->booleanTrue);
        $this->assertInternalType('boolean', $obj->booleanTrue);

        $this->assertEquals(false, $obj->booleanFalse);
        $this->assertInternalType('boolean', $obj->booleanFalse);

        $this->assertEquals(
            new \DateTime('2000-01-01T00:00:00.000Z', new \DateTimeZone('UTC')),
            $obj->DateTime
        );
        $this->assertInstanceOf('\DateTime', $obj->DateTime);

        $this->assertEquals(2, count($obj->strings));
        $this->assertEquals('foo', $obj->strings[0]);
        $this->assertEquals('bar', $obj->strings[1]);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\RepeatableType', $obj->strings);

        $this->assertEquals(2, count($obj->integers));
        $this->assertEquals(111, $obj->integers[0]);
        $this->assertEquals(222, $obj->integers[1]);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\RepeatableType', $obj->integers);

        $this->assertEquals(543.21, $obj->AmountClass->value);
        $this->assertEquals('one', $obj->AmountClass->AttributeOne);
        $this->assertInstanceOf('\DTS\eBaySDK\Test\Mocks\AmountClass', $obj->AmountClass);

        $this->assertEquals(123, $obj->SimpleClass->integer);
        $this->assertEquals('foo', $obj->SimpleClass->string);
        $this->assertEquals(123.45, $obj->SimpleClass->double);
        $this->assertEquals(true, $obj->SimpleClass->booleanTrue);
        $this->assertEquals(false, $obj->SimpleClass->booleanFalse);
        $this->assertEquals(
            new \DateTime('2000-01-01T00:00:00.000Z', new \DateTimeZone('UTC')),
            $obj->SimpleClass->DateTime
        );
        $this->assertInstanceOf('\DTS\eBaySDK\Test\Mocks\SimpleClass', $obj->SimpleClass);

        $this->assertEquals(3, count($obj->SimpleClass->integers));
        $this->assertEquals(100, $obj->SimpleClass->integers[0]);
        $this->assertEquals(200, $obj->SimpleClass->integers[1]);
        $this->assertEquals(300, $obj->SimpleClass->integers[2]);

        $this->assertEquals(3, count($obj->simpleClasses));
        $this->assertInstanceOf('\DTS\eBaySDK\Types\RepeatableType', $obj->simpleClasses);

        $this->assertEquals(2, count($obj->decimalTypes));
        $this->assertEquals(1, $obj->decimalTypes[0]->value);
        $this->assertEquals(2.34, $obj->decimalTypes[1]->value);
        $this->assertInstanceOf('\DTS\eBaySDK\Types\RepeatableType', $obj->strings);

        $this->assertEquals(1, $obj->anyType);

        $this->assertEquals(2, count($obj->anyTypes));
        $this->assertInstanceOf('\DTS\eBaySDK\Types\RepeatableType', $obj->anyTypes);
    }

    public function testSettingInvalidPropertyViaCtor()
    {
        $this->setExpectedException('\DTS\eBaySDK\Exceptions\UnknownPropertyException', 'Unknown property bar');

        $obj = new ComplexClass([
            'bar' => 'bar'
        ]);
    }

    public function testSettingInvalidPropertyTypeViaCtor()
    {
        $this->setExpectedException('\DTS\eBaySDK\Exceptions\InvalidPropertyTypeException', 'Invalid property type provided for string. Expected string but got integer');

        $obj = new ComplexClass([
            'string' => 123
        ]);
    }

    /**
     * This is to handle JSON responses such as
     * {
     *     "foo": [null],
     *     "bar": null
     * }
     * The null object results in the SDK trying to pass null
     * to the ctor of an object, which expects an array.
     */
    public function testNullValuesWillNotSetProperties()
    {
        $obj = new ComplexClass([
            'foo' => null,
            'strings' => [null, null],
            'decimalTypes' => [null, null],
            'simpleClasses' => [null, null, new SimpleClass()]
        ]);

        $this->assertEquals(false, isset($obj->foo));
        $this->assertEquals(true, isset($obj->strings));
        $this->assertEquals(0, count($obj->strings));
        $this->assertEquals(false, isset($obj->decimalType));
        $this->assertEquals(true, isset($obj->simpleClasses));
        $this->assertEquals(1, count($obj->simpleClasses));
    }
}
