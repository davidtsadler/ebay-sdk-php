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
 * @property string $DetailVersion
 * @property boolean $LinkedPayPalAccount
 * @property \DTS\eBaySDK\Trading\Types\MaximumBuyerPolicyViolationsDetailsType $MaximumBuyerPolicyViolations
 * @property \DTS\eBaySDK\Trading\Types\MaximumItemRequirementsDetailsType $MaximumItemRequirements
 * @property \DTS\eBaySDK\Trading\Types\MaximumUnpaidItemStrikesInfoDetailsType $MaximumUnpaidItemStrikesInfo
 * @property \DTS\eBaySDK\Trading\Types\MinimumFeedbackScoreDetailsType $MinimumFeedbackScore
 * @property boolean $ShipToRegistrationCountry
 * @property \DateTime $UpdateTime
 * @property \DTS\eBaySDK\Trading\Types\VerifiedUserRequirementsDetailsType $VerifiedUserRequirements
 */
class SiteBuyerRequirementDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'DetailVersion' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DetailVersion'
        ),
        'LinkedPayPalAccount' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LinkedPayPalAccount'
        ),
        'MaximumBuyerPolicyViolations' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MaximumBuyerPolicyViolationsDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaximumBuyerPolicyViolations'
        ),
        'MaximumItemRequirements' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MaximumItemRequirementsDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaximumItemRequirements'
        ),
        'MaximumUnpaidItemStrikesInfo' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MaximumUnpaidItemStrikesInfoDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaximumUnpaidItemStrikesInfo'
        ),
        'MinimumFeedbackScore' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MinimumFeedbackScoreDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MinimumFeedbackScore'
        ),
        'ShipToRegistrationCountry' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShipToRegistrationCountry'
        ),
        'UpdateTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UpdateTime'
        ),
        'VerifiedUserRequirements' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\VerifiedUserRequirementsDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VerifiedUserRequirements'
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
