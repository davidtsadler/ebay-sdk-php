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
 * @property boolean $ShipToRegistrationCountry
 * @property boolean $ZeroFeedbackScore
 * @property integer $MinimumFeedbackScore
 * @property \DTS\eBaySDK\Trading\Types\MaximumItemRequirementsType $MaximumItemRequirements
 * @property boolean $LinkedPayPalAccount
 * @property \DTS\eBaySDK\Trading\Types\VerifiedUserRequirementsType $VerifiedUserRequirements
 * @property \DTS\eBaySDK\Trading\Types\MaximumUnpaidItemStrikesInfoType $MaximumUnpaidItemStrikesInfo
 * @property \DTS\eBaySDK\Trading\Types\MaximumBuyerPolicyViolationsType $MaximumBuyerPolicyViolations
 */
class BuyerRequirementDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'ShipToRegistrationCountry' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShipToRegistrationCountry'
        ),
        'ZeroFeedbackScore' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ZeroFeedbackScore'
        ),
        'MinimumFeedbackScore' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MinimumFeedbackScore'
        ),
        'MaximumItemRequirements' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MaximumItemRequirementsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaximumItemRequirements'
        ),
        'LinkedPayPalAccount' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LinkedPayPalAccount'
        ),
        'VerifiedUserRequirements' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\VerifiedUserRequirementsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VerifiedUserRequirements'
        ),
        'MaximumUnpaidItemStrikesInfo' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MaximumUnpaidItemStrikesInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaximumUnpaidItemStrikesInfo'
        ),
        'MaximumBuyerPolicyViolations' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MaximumBuyerPolicyViolationsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaximumBuyerPolicyViolations'
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
