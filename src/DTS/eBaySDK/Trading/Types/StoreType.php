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
 * @property string $Name
 * @property string $URLPath
 * @property string $URL
 * @property \DTS\eBaySDK\Trading\Enums\StoreSubscriptionLevelCodeType $SubscriptionLevel
 * @property string $Description
 * @property \DTS\eBaySDK\Trading\Types\StoreLogoType $Logo
 * @property \DTS\eBaySDK\Trading\Types\StoreThemeType $Theme
 * @property \DTS\eBaySDK\Trading\Enums\StoreHeaderStyleCodeType $HeaderStyle
 * @property integer $HomePage
 * @property \DTS\eBaySDK\Trading\Enums\StoreItemListLayoutCodeType $ItemListLayout
 * @property \DTS\eBaySDK\Trading\Enums\StoreItemListSortOrderCodeType $ItemListSortOrder
 * @property \DTS\eBaySDK\Trading\Enums\StoreCustomHeaderLayoutCodeType $CustomHeaderLayout
 * @property string $CustomHeader
 * @property boolean $ExportListings
 * @property \DTS\eBaySDK\Trading\Types\StoreCustomCategoryArrayType $CustomCategories
 * @property \DTS\eBaySDK\Trading\Types\StoreCustomListingHeaderType $CustomListingHeader
 * @property \DTS\eBaySDK\Trading\Enums\MerchDisplayCodeType $MerchDisplay
 * @property \DateTime $LastOpenedTime
 * @property boolean $TitleWithCompatibility
 */
class StoreType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'Name' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Name'
        ),
        'URLPath' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'URLPath'
        ),
        'URL' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'URL'
        ),
        'SubscriptionLevel' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SubscriptionLevel'
        ),
        'Description' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Description'
        ),
        'Logo' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\StoreLogoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Logo'
        ),
        'Theme' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\StoreThemeType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Theme'
        ),
        'HeaderStyle' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HeaderStyle'
        ),
        'HomePage' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HomePage'
        ),
        'ItemListLayout' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemListLayout'
        ),
        'ItemListSortOrder' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemListSortOrder'
        ),
        'CustomHeaderLayout' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CustomHeaderLayout'
        ),
        'CustomHeader' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CustomHeader'
        ),
        'ExportListings' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExportListings'
        ),
        'CustomCategories' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\StoreCustomCategoryArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CustomCategories'
        ),
        'CustomListingHeader' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\StoreCustomListingHeaderType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CustomListingHeader'
        ),
        'MerchDisplay' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MerchDisplay'
        ),
        'LastOpenedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LastOpenedTime'
        ),
        'TitleWithCompatibility' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TitleWithCompatibility'
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
