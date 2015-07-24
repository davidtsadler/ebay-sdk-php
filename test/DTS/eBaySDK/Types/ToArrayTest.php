<?php
use DTS\eBaySDK\Mocks\AmountClass;
use DTS\eBaySDK\Mocks\SimpleClass;
use DTS\eBaySDK\Mocks\ComplexClass;
use DTS\eBaySDK\Mocks\Base64BinaryType;
use DTS\eBaySDK\Mocks\BooleanType;
use DTS\eBaySDK\Mocks\DecimalType;
use DTS\eBaySDK\Mocks\DoubleType;
use DTS\eBaySDK\Mocks\IntegerType;
use DTS\eBaySDK\Mocks\StringType;
use DTS\eBaySDK\Mocks\TokenType;
use DTS\eBaySDK\Mocks\URIType;

class ToArrayTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->obj = new ComplexClass();
    }

    public function testToArrayExists()
    {
        $this->assertEquals(true, is_array($this->obj->toArray()));
    }

    public function testToArray()
    {
        $array = array(
            'integer' => 123,
            'string' => 'foo',
            'double' => 123.45,
            'booleanTrue' => true,
            'booleanFalse' => false,
            'DateTime' => '2000-01-01T00:00:00.000Z',
            'strings' => array('foo', 'bar'),
            'integers' => array(111, 222),
            'AmountClass' => array(
                'value' => 543.21,
                'AttributeOne' => 'one'
            ),
            'SimpleClass' => array(
                'integer' => 123,
                'string' => 'foo',
                'double' => 123.45,
                'booleanTrue' => true,
                'booleanFalse' => false,
                'DateTime' => '2000-01-01T00:00:00.000Z',
                'integers' => array(100, 200, 300)
            ),
            'simpleClasses' => array(
                array(
                    'integer' => 321,
                    'string' => 'bar',
                    'double' => 5432.10,
                    'booleanTrue' => true,
                    'booleanFalse' => false,
                    'DateTime' => '2015-01-01T00:00:00.000Z'
                ),
                array(
                    'integers' => array(300, 200, 100),
                    'strings' => array('foo', 'bar')
                ),
                array()
            ),
            'base64BinaryType' => array(),
            'booleanType' => array(),
            'decimalType' => array(),
            'doubleType' => array(),
            'integerType' => array(),
            'stringType' => array(),
            'tokenType' => array(),
            'uriType' => array()
        );

        $this->obj->integer = 123;
        $this->obj->string = 'foo';
        $this->obj->double = 123.45;
        $this->obj->booleanTrue = true;
        $this->obj->booleanFalse = false;
        $this->obj->DateTime = new \DateTime('2000-01-01', new \DateTimeZone('UTC'));
        $this->obj->strings = array('foo', 'bar');
        $this->obj->integers = array(111, 222);
        $this->obj->AmountClass = new Amountclass(array(
            'value' => 543.21,
            'AttributeOne' => 'one'
        ));
        $this->obj->SimpleClass = new SimpleClass(array(
            'integer' => 123,
            'string' => 'foo',
            'double' => 123.45,
            'booleanTrue' => true,
            'booleanFalse' => false,
            'DateTime' => new \DateTime('2000-01-01', new \DateTimeZone('UTC')),
            'integers' => array(100, 200, 300)
        ));
        $this->obj->simpleClasses = array(
            new SimpleClass(array(
                'integer' => 321,
                'string' => 'bar',
                'double' => 5432.10,
                'booleanTrue' => true,
                'booleanFalse' => false,
                'DateTime' => new \DateTime('2015-01-01', new \DateTimeZone('UTC'))
            )),
            new SimpleClass(array(
                'integers' => array(300, 200, 100),
                'strings' => array('foo', 'bar')
            )),
            new SimpleClass()
        );
        $this->obj->base64BinaryType = new Base64BinaryType();
        $this->obj->booleanType = new BooleanType();
        $this->obj->decimalType = new DecimalType();
        $this->obj->doubleType = new DoubleType();
        $this->obj->integerType = new IntegerType();
        $this->obj->stringType = new StringType();
        $this->obj->tokenType = new TokenType();
        $this->obj->uriType = new URIType();

        $this->assertEquals($array, $this->obj->toArray());
    }
}
