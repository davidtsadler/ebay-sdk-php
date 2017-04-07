<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\PostOrder\Types;

/**
 *
 * @property integer $errorId
 * @property string $domain
 * @property string $severity
 * @property string $category
 * @property string $message
 * @property \DTS\eBaySDK\PostOrder\Types\ErrorParameter[] $parameter
 * @property string $longMessage
 * @property integer $httpStatusCode
 */
class Error extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'errorId' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'errorId'
        ],
        'domain' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'domain'
        ],
        'subdomain' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'subdomain'
        ],
        'severity' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'severity'
        ],
        'category' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'category'
        ],
        'message' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'message'
        ],
        'parameter' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\ErrorParameter',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'parameter'
        ],
        'longMessage' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'longMessage'
        ],
        'httpStatusCode' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'httpStatusCode'
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
