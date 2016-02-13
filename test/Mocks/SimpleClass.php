<?php
namespace DTS\eBaySDK\Test\Mocks;

class SimpleClass extends \DTS\eBaySDK\Types\BaseType
{
    private static $propertyTypes = [
        'integer' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'integer'
        ],
        'string' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'string'
        ],
        'double' => [
            'type' => 'double',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'double'
        ],
        'booleanTrue' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'booleanTrue'
        ],
        'booleanFalse' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'booleanFalse'
        ],
        'DateTime' => [
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DateTime'
        ],
        'SimpleClass' => [
            'type' => 'DTS\eBaySDK\Test\Mocks\SimpleClass',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SimpleClass'
        ],
        'strings' => [
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'strings'
        ],
        'integers' => [
            'type' => 'integer',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'integers'
        ],
        'base64BinaryType' => [
            'type' => 'DTS\eBaySDK\Test\Mocks\Base64BinaryType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'base64BinaryType'
        ],
        'booleanType' => [
            'type' => 'DTS\eBaySDK\Test\Mocks\BooleanType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'booleanType'
        ],
        'decimalType' => [
            'type' => 'DTS\eBaySDK\Test\Mocks\DecimalType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'decimalType'
        ],
        'doubleType' => [
            'type' => 'DTS\eBaySDK\Test\Mocks\DoubleType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'doubleType'
        ],
        'integerType' => [
            'type' => 'DTS\eBaySDK\Test\Mocks\IntegerType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'integerType'
        ],
        'stringType' => [
            'type' => 'DTS\eBaySDK\Test\Mocks\StringType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'stringType'
        ],
        'tokenType' => [
            'type' => 'DTS\eBaySDK\Test\Mocks\TokenType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'tokenType'
        ],
        'uriType' => [
            'type' => 'DTS\eBaySDK\Test\Mocks\URIType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'uriType'
        ],
        'IntegerAttribute' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => true,
            'attributeName' => 'IntegerAttribute'
        ],
        'doubleAttribute' => [
            'type' => 'double',
            'unbound' => false,
            'attribute' => true,
            'attributeName' => 'doubleAttribute'
        ],
        'BooleanTrueAttribute' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => true,
            'attributeName' => 'BooleanTrueAttribute'
        ],
        'booleanFalseAttribute' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => true,
            'attributeName' => 'booleanFalseAttribute'
        ],
        'DateTimeAttribute' => [
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => true,
            'attributeName' => 'DateTimeAttribute'
        ]
    ];

    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://davidtsadler.com"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
