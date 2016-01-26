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
 * @property \DTS\eBaySDK\Trading\Types\AmountType $OriginalRetailPrice
 * @property \DTS\eBaySDK\Trading\Types\AmountType $MinimumAdvertisedPrice
 * @property \DTS\eBaySDK\Trading\Enums\MinimumAdvertisedPriceExposureCodeType $MinimumAdvertisedPriceExposure
 * @property \DTS\eBaySDK\Trading\Enums\PricingTreatmentCodeType $PricingTreatment
 * @property boolean $SoldOneBay
 * @property boolean $SoldOffeBay
 * @property \DTS\eBaySDK\Trading\Types\AmountType $MadeForOutletComparisonPrice
 */
class DiscountPriceInfoType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'OriginalRetailPrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OriginalRetailPrice'
        ),
        'MinimumAdvertisedPrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MinimumAdvertisedPrice'
        ),
        'MinimumAdvertisedPriceExposure' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MinimumAdvertisedPriceExposure'
        ),
        'PricingTreatment' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PricingTreatment'
        ),
        'SoldOneBay' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SoldOneBay'
        ),
        'SoldOffeBay' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SoldOffeBay'
        ),
        'MadeForOutletComparisonPrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MadeForOutletComparisonPrice'
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
