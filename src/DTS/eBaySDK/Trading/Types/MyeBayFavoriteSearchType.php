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
 * @property string $SearchName
 * @property string $SearchQuery
 * @property string $QueryKeywords
 * @property string $CategoryID
 * @property \DTS\eBaySDK\Trading\Enums\SimpleItemSortCodeType $ItemSort
 * @property \DTS\eBaySDK\Trading\Enums\SortOrderCodeType $SortOrder
 * @property \DateTime $EndTimeFrom
 * @property \DateTime $EndTimeTo
 * @property integer $MaxDistance
 * @property string $PostalCode
 * @property \DTS\eBaySDK\Trading\Enums\ItemTypeCodeType $ItemType
 * @property \DTS\eBaySDK\Trading\Types\AmountType $PriceMax
 * @property \DTS\eBaySDK\Trading\Types\AmountType $PriceMin
 * @property \DTS\eBaySDK\Trading\Enums\CurrencyCodeType $Currency
 * @property integer $BidCountMax
 * @property integer $BidCountMin
 * @property \DTS\eBaySDK\Trading\Enums\SearchFlagCodeType[] $SearchFlag
 * @property \DTS\eBaySDK\Trading\Enums\PaymentMethodSearchCodeType $PaymentMethod
 * @property \DTS\eBaySDK\Trading\Enums\PreferredLocationCodeType $PreferredLocation
 * @property string[] $SellerID
 * @property string[] $SellerIDExclude
 * @property \DTS\eBaySDK\Trading\Enums\CountryCodeType $ItemsAvailableTo
 * @property \DTS\eBaySDK\Trading\Enums\CountryCodeType $ItemsLocatedIn
 * @property \DTS\eBaySDK\Trading\Enums\SellerBusinessCodeType $SellerBusinessType
 * @property \DTS\eBaySDK\Trading\Enums\ItemConditionCodeType $Condition
 * @property integer $Quantity
 * @property \DTS\eBaySDK\Trading\Enums\QuantityOperatorCodeType $QuantityOperator
 */
class MyeBayFavoriteSearchType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'SearchName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SearchName'
        ),
        'SearchQuery' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SearchQuery'
        ),
        'QueryKeywords' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QueryKeywords'
        ),
        'CategoryID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CategoryID'
        ),
        'ItemSort' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemSort'
        ),
        'SortOrder' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SortOrder'
        ),
        'EndTimeFrom' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EndTimeFrom'
        ),
        'EndTimeTo' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EndTimeTo'
        ),
        'MaxDistance' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaxDistance'
        ),
        'PostalCode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PostalCode'
        ),
        'ItemType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemType'
        ),
        'PriceMax' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PriceMax'
        ),
        'PriceMin' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PriceMin'
        ),
        'Currency' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Currency'
        ),
        'BidCountMax' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BidCountMax'
        ),
        'BidCountMin' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BidCountMin'
        ),
        'SearchFlag' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'SearchFlag'
        ),
        'PaymentMethod' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentMethod'
        ),
        'PreferredLocation' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PreferredLocation'
        ),
        'SellerID' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'SellerID'
        ),
        'SellerIDExclude' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'SellerIDExclude'
        ),
        'ItemsAvailableTo' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemsAvailableTo'
        ),
        'ItemsLocatedIn' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemsLocatedIn'
        ),
        'SellerBusinessType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerBusinessType'
        ),
        'Condition' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Condition'
        ),
        'Quantity' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Quantity'
        ),
        'QuantityOperator' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityOperator'
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
