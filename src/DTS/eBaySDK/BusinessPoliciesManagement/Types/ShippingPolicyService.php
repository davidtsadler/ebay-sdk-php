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
 * @property string[] $shipToLocation
 * @property string $shippingService
 * @property string $shippingType
 * @property integer $sortOrderId
 * @property boolean $freeShipping
 * @property \DTS\eBaySDK\BusinessPoliciesManagement\Types\Amount $codFee
 * @property boolean $fastShipping
 * @property \DTS\eBaySDK\BusinessPoliciesManagement\Types\Amount $shippingServiceAdditionalCost
 * @property \DTS\eBaySDK\BusinessPoliciesManagement\Types\Amount $shippingServiceCost
 * @property \DTS\eBaySDK\BusinessPoliciesManagement\Types\Amount $shippingSurcharge
 * @property \DTS\eBaySDK\BusinessPoliciesManagement\Types\Amount $shippingOverrideFee
 * @property boolean $buyerResponsibleForShipping
 */
class ShippingPolicyService extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'shipToLocation' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'shipToLocation'
        ),
        'shippingService' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'shippingService'
        ),
        'shippingType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'shippingType'
        ),
        'sortOrderId' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'sortOrderId'
        ),
        'freeShipping' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'freeShipping'
        ),
        'codFee' => array(
            'type' => 'DTS\eBaySDK\BusinessPoliciesManagement\Types\Amount',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'codFee'
        ),
        'fastShipping' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'fastShipping'
        ),
        'shippingServiceAdditionalCost' => array(
            'type' => 'DTS\eBaySDK\BusinessPoliciesManagement\Types\Amount',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'shippingServiceAdditionalCost'
        ),
        'shippingServiceCost' => array(
            'type' => 'DTS\eBaySDK\BusinessPoliciesManagement\Types\Amount',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'shippingServiceCost'
        ),
        'shippingSurcharge' => array(
            'type' => 'DTS\eBaySDK\BusinessPoliciesManagement\Types\Amount',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'shippingSurcharge'
        ),
        'shippingOverrideFee' => array(
            'type' => 'DTS\eBaySDK\BusinessPoliciesManagement\Types\Amount',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'shippingOverrideFee'
        ),
        'buyerResponsibleForShipping' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'buyerResponsibleForShipping'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/selling/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
