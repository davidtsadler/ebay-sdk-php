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
 * @property string $Description
 * @property string $EAN
 * @property boolean $ExtendedHolidayReturns
 * @property string $Refund
 * @property string $RefundOption
 * @property string $RestockingFeeValue
 * @property string $RestockingFeeValueOption
 * @property string $ReturnsAccepted
 * @property string $ReturnsAcceptedOption
 * @property string $ReturnsWithin
 * @property string $ReturnsWithinOption
 * @property string $ShippingCostPaidBy
 * @property string $ShippingCostPaidByOption
 * @property string $WarrantyDuration
 * @property string $WarrantyDurationOption
 * @property string $WarrantyOffered
 * @property string $WarrantyOfferedOption
 * @property string $WarrantyType
 * @property string $WarrantyTypeOption
 */
class ReturnPolicyType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'Description' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Description'
        ),
        'EAN' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EAN'
        ),
        'ExtendedHolidayReturns' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExtendedHolidayReturns'
        ),
        'Refund' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Refund'
        ),
        'RefundOption' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundOption'
        ),
        'RestockingFeeValue' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RestockingFeeValue'
        ),
        'RestockingFeeValueOption' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RestockingFeeValueOption'
        ),
        'ReturnsAccepted' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnsAccepted'
        ),
        'ReturnsAcceptedOption' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnsAcceptedOption'
        ),
        'ReturnsWithin' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnsWithin'
        ),
        'ReturnsWithinOption' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnsWithinOption'
        ),
        'ShippingCostPaidBy' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingCostPaidBy'
        ),
        'ShippingCostPaidByOption' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingCostPaidByOption'
        ),
        'WarrantyDuration' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WarrantyDuration'
        ),
        'WarrantyDurationOption' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WarrantyDurationOption'
        ),
        'WarrantyOffered' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WarrantyOffered'
        ),
        'WarrantyOfferedOption' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WarrantyOfferedOption'
        ),
        'WarrantyType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WarrantyType'
        ),
        'WarrantyTypeOption' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WarrantyTypeOption'
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
