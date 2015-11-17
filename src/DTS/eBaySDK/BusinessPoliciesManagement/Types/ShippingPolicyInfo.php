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

namespace DTS\eBaySDK\BusinessPoliciesManagement\Types;

/**
 *
 * @property string $shippingPolicyName
 * @property string $domesticShippingType
 * @property string $intlShippingType
 * @property integer $dispatchTimeMax
 * @property string $dispatchTimeReason
 * @property string $shippingOption
 * @property string[] $excludeShipToLocation
 * @property \DTS\eBaySDK\BusinessPoliciesManagement\Types\ShippingProfileDiscountInfo $shippingProfileDiscountInfo
 * @property \DTS\eBaySDK\BusinessPoliciesManagement\Types\FreightShipping $freightShipping
 * @property string[] $shipToLocations
 * @property \DTS\eBaySDK\BusinessPoliciesManagement\Types\ShippingPolicyInfoService[] $domesticShippingPolicyInfoService
 * @property \DTS\eBaySDK\BusinessPoliciesManagement\Types\ShippingPolicyInfoService[] $intlShippingPolicyInfoService
 * @property \DTS\eBaySDK\BusinessPoliciesManagement\Types\Insurance $insurance
 * @property string $intlRateTable
 * @property string $domesticRateTable
 * @property \DTS\eBaySDK\BusinessPoliciesManagement\Types\Amount $packagingHandlingCosts
 * @property \DTS\eBaySDK\BusinessPoliciesManagement\Types\Amount $internationalPackagingHandlingCosts
 * @property \DTS\eBaySDK\BusinessPoliciesManagement\Enums\IsoCurrencyCode $shippingPolicyCurrency
 * @property boolean $GlobalShipping
 * @property boolean $EligibleForPickupDropOff
 */
class ShippingPolicyInfo extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'shippingPolicyName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'shippingPolicyName'
        ),
        'domesticShippingType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'domesticShippingType'
        ),
        'intlShippingType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'intlShippingType'
        ),
        'dispatchTimeMax' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'dispatchTimeMax'
        ),
        'dispatchTimeReason' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'dispatchTimeReason'
        ),
        'shippingOption' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'shippingOption'
        ),
        'excludeShipToLocation' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'excludeShipToLocation'
        ),
        'shippingProfileDiscountInfo' => array(
            'type' => 'DTS\eBaySDK\BusinessPoliciesManagement\Types\ShippingProfileDiscountInfo',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'shippingProfileDiscountInfo'
        ),
        'freightShipping' => array(
            'type' => 'DTS\eBaySDK\BusinessPoliciesManagement\Types\FreightShipping',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'freightShipping'
        ),
        'shipToLocations' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'shipToLocations'
        ),
        'domesticShippingPolicyInfoService' => array(
            'type' => 'DTS\eBaySDK\BusinessPoliciesManagement\Types\ShippingPolicyInfoService',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'domesticShippingPolicyInfoService'
        ),
        'intlShippingPolicyInfoService' => array(
            'type' => 'DTS\eBaySDK\BusinessPoliciesManagement\Types\ShippingPolicyInfoService',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'intlShippingPolicyInfoService'
        ),
        'insurance' => array(
            'type' => 'DTS\eBaySDK\BusinessPoliciesManagement\Types\Insurance',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'insurance'
        ),
        'intlRateTable' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'intlRateTable'
        ),
        'domesticRateTable' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'domesticRateTable'
        ),
        'packagingHandlingCosts' => array(
            'type' => 'DTS\eBaySDK\BusinessPoliciesManagement\Types\Amount',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'packagingHandlingCosts'
        ),
        'internationalPackagingHandlingCosts' => array(
            'type' => 'DTS\eBaySDK\BusinessPoliciesManagement\Types\Amount',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'internationalPackagingHandlingCosts'
        ),
        'shippingPolicyCurrency' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'shippingPolicyCurrency'
        ),
        'GlobalShipping' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GlobalShipping'
        ),
        'EligibleForPickupDropOff' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EligibleForPickupDropOff'
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
            self::$xmlNamespaces[__CLASS__] = 'http://www.ebay.com/marketplace/selling/v1/services';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
