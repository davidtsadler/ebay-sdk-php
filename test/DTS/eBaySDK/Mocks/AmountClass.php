<?php
namespace DTS\eBaySDK\Mocks;

class AmountClass extends \DTS\eBaySDK\Types\DoubleType
{
    private static $propertyTypes = array(
        'AttributeOne' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => true,
            'attributeName' => 'AttributeOne'
        ),
        'AttributeTwo' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => true,
            'attributeName' => 'AttributeTwo'
        )
    );

    public function __construct(array $values = array())
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'http://davidtsadler.com';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'Price';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
