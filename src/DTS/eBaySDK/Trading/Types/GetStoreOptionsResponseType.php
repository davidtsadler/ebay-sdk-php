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
 * @property \DTS\eBaySDK\Trading\Types\StoreThemeArrayType $BasicThemeArray
 * @property \DTS\eBaySDK\Trading\Types\StoreThemeArrayType $AdvancedThemeArray
 * @property \DTS\eBaySDK\Trading\Types\StoreLogoArrayType $LogoArray
 * @property \DTS\eBaySDK\Trading\Types\StoreSubscriptionArrayType $SubscriptionArray
 * @property integer $MaxCategories
 * @property integer $MaxCategoryLevels
 */
class GetStoreOptionsResponseType extends \DTS\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'BasicThemeArray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\StoreThemeArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BasicThemeArray'
        ),
        'AdvancedThemeArray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\StoreThemeArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AdvancedThemeArray'
        ),
        'LogoArray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\StoreLogoArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LogoArray'
        ),
        'SubscriptionArray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\StoreSubscriptionArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SubscriptionArray'
        ),
        'MaxCategories' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaxCategories'
        ),
        'MaxCategoryLevels' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaxCategoryLevels'
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
