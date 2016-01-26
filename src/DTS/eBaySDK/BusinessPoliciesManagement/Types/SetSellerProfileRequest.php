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
 * @property \DTS\eBaySDK\BusinessPoliciesManagement\Types\PaymentProfile $paymentProfile
 * @property \DTS\eBaySDK\BusinessPoliciesManagement\Types\ReturnPolicyProfile $returnPolicyProfile
 * @property \DTS\eBaySDK\BusinessPoliciesManagement\Types\ShippingPolicyProfile $shippingPolicyProfile
 */
class SetSellerProfileRequest extends \DTS\eBaySDK\BusinessPoliciesManagement\Types\BaseRequest
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'paymentProfile' => array(
            'type' => 'DTS\eBaySDK\BusinessPoliciesManagement\Types\PaymentProfile',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'paymentProfile'
        ),
        'returnPolicyProfile' => array(
            'type' => 'DTS\eBaySDK\BusinessPoliciesManagement\Types\ReturnPolicyProfile',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'returnPolicyProfile'
        ),
        'shippingPolicyProfile' => array(
            'type' => 'DTS\eBaySDK\BusinessPoliciesManagement\Types\ShippingPolicyProfile',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'shippingPolicyProfile'
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'setSellerProfileRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
