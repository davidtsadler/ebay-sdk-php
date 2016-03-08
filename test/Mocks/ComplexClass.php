<?php
namespace DTS\eBaySDK\Test\Mocks;

class ComplexClass extends \DTS\eBaySDK\Test\Mocks\SimpleClass
{
    private static $propertyTypes = [
        'foo' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'foo'
        ],
        'AmountClass' => [
            'type' => 'DTS\eBaySDK\Test\Mocks\AmountClass',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AmountClass'
        ],
        'simpleClasses' => [
            'type' => 'DTS\eBaySDK\Test\Mocks\SimpleClass',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'simpleClasses'
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'root';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
