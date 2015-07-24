<?php
/**
 * THE CODE IN THIS FILE WAS GENERATED FROM THE EBAY WSDL USING THE PROJECT:
 *
 * https://github.com/davidtsadler/ebay-api-sdk-php
 *
 * Copyright 2014 David T. Sadler
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property integer $Confidence
 * @property integer $MaxValues
 * @property integer $MinValues
 * @property \DTS\eBaySDK\Trading\Types\NameValueRelationshipType[] $Relationship
 * @property \DTS\eBaySDK\Trading\Enums\SelectionModeCodeType $SelectionMode
 * @property \DTS\eBaySDK\Trading\Enums\ValueFormatCodeType $ValueFormat
 * @property \DTS\eBaySDK\Trading\Enums\ValueTypeCodeType $ValueType
 * @property \DTS\eBaySDK\Trading\Enums\VariationPictureRuleCodeType $VariationPicture
 * @property \DTS\eBaySDK\Trading\Enums\VariationSpecificsRuleCodeType $VariationSpecifics
 */
class RecommendationValidationRulesType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'Confidence' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Confidence'
        ),
        'MaxValues' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaxValues'
        ),
        'MinValues' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MinValues'
        ),
        'Relationship' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\NameValueRelationshipType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'Relationship'
        ),
        'SelectionMode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SelectionMode'
        ),
        'ValueFormat' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ValueFormat'
        ),
        'ValueType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ValueType'
        ),
        'VariationPicture' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VariationPicture'
        ),
        'VariationSpecifics' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VariationSpecifics'
        )
    );

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = array())
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'urn:ebay:apis:eBLBaseComponents';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
