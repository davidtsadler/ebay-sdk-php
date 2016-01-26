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
 * @property string $RefundOption
 * @property string $Refund
 * @property string $ReturnsWithinOption
 * @property string $ReturnsWithin
 * @property string $ReturnsAcceptedOption
 * @property string $ReturnsAccepted
 * @property string $Description
 * @property string $WarrantyOfferedOption
 * @property string $WarrantyOffered
 * @property string $WarrantyTypeOption
 * @property string $WarrantyType
 * @property string $WarrantyDurationOption
 * @property string $WarrantyDuration
 * @property string $EAN
 * @property string $ShippingCostPaidByOption
 * @property string $ShippingCostPaidBy
 * @property string $RestockingFeeValue
 * @property string $RestockingFeeValueOption
 * @property boolean $ExtendedHolidayReturns
 */
class ReturnPolicyType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'RefundOption' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundOption'
        ),
        'Refund' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Refund'
        ),
        'ReturnsWithinOption' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnsWithinOption'
        ),
        'ReturnsWithin' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnsWithin'
        ),
        'ReturnsAcceptedOption' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnsAcceptedOption'
        ),
        'ReturnsAccepted' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnsAccepted'
        ),
        'Description' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Description'
        ),
        'WarrantyOfferedOption' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WarrantyOfferedOption'
        ),
        'WarrantyOffered' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WarrantyOffered'
        ),
        'WarrantyTypeOption' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WarrantyTypeOption'
        ),
        'WarrantyType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WarrantyType'
        ),
        'WarrantyDurationOption' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WarrantyDurationOption'
        ),
        'WarrantyDuration' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WarrantyDuration'
        ),
        'EAN' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EAN'
        ),
        'ShippingCostPaidByOption' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingCostPaidByOption'
        ),
        'ShippingCostPaidBy' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingCostPaidBy'
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
        'ExtendedHolidayReturns' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExtendedHolidayReturns'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
