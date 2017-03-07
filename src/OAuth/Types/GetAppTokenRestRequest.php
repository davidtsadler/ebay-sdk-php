<?php
namespace DTS\eBaySDK\OAuth\Types;

/**
 *
 * @property string $grant_type
 * @property string $redirect_uri
 * @property string $scope
 */
class GetAppTokenRestRequest extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'grant_type' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'grant_type'
        ],
        'redirect_uri' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'redirect_uri'
        ],
        'scope' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'scope'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
