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
 * @property boolean $Description
 * @property string $DetailVersion
 * @property boolean $EAN
 * @property \DTS\eBaySDK\Trading\Types\RefundDetailsType[] $Refund
 * @property \DTS\eBaySDK\Trading\Types\RestockingFeeValueDetailsType[] $RestockingFeeValue
 * @property \DTS\eBaySDK\Trading\Types\ReturnsAcceptedDetailsType[] $ReturnsAccepted
 * @property \DTS\eBaySDK\Trading\Types\ReturnsWithinDetailsType[] $ReturnsWithin
 * @property \DTS\eBaySDK\Trading\Types\ShippingCostPaidByDetailsType[] $ShippingCostPaidBy
 * @property \DateTime $UpdateTime
 * @property \DTS\eBaySDK\Trading\Types\WarrantyDurationDetailsType[] $WarrantyDuration
 * @property \DTS\eBaySDK\Trading\Types\WarrantyOfferedDetailsType[] $WarrantyOffered
 * @property \DTS\eBaySDK\Trading\Types\WarrantyTypeDetailsType[] $WarrantyType
 */
class ReturnPolicyDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'Description' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Description'
        ),
        'DetailVersion' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DetailVersion'
        ),
        'EAN' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EAN'
        ),
        'Refund' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\RefundDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'Refund'
        ),
        'RestockingFeeValue' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\RestockingFeeValueDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'RestockingFeeValue'
        ),
        'ReturnsAccepted' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ReturnsAcceptedDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ReturnsAccepted'
        ),
        'ReturnsWithin' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ReturnsWithinDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ReturnsWithin'
        ),
        'ShippingCostPaidBy' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingCostPaidByDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShippingCostPaidBy'
        ),
        'UpdateTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UpdateTime'
        ),
        'WarrantyDuration' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\WarrantyDurationDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'WarrantyDuration'
        ),
        'WarrantyOffered' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\WarrantyOfferedDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'WarrantyOffered'
        ),
        'WarrantyType' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\WarrantyTypeDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'WarrantyType'
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
