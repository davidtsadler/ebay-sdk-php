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
 * @property \DTS\eBaySDK\Trading\Types\PaginatedItemArrayType $BestOfferList
 * @property \DTS\eBaySDK\Trading\Types\PaginatedItemArrayType $BidList
 * @property \DTS\eBaySDK\Trading\Types\BuyingSummaryType $BuyingSummary
 * @property \DTS\eBaySDK\Trading\Types\PaginatedItemArrayType $DeletedFromLostList
 * @property \DTS\eBaySDK\Trading\Types\PaginatedOrderTransactionArrayType $DeletedFromWonList
 * @property \DTS\eBaySDK\Trading\Types\MyeBayFavoriteSearchListType $FavoriteSearches
 * @property \DTS\eBaySDK\Trading\Types\MyeBayFavoriteSellerListType $FavoriteSellers
 * @property \DTS\eBaySDK\Trading\Types\PaginatedItemArrayType $LostList
 * @property \DTS\eBaySDK\Trading\Types\ItemType[] $SecondChanceOffer
 * @property \DTS\eBaySDK\Trading\Types\UserDefinedListType[] $UserDefinedList
 * @property \DTS\eBaySDK\Trading\Types\PaginatedItemArrayType $WatchList
 * @property \DTS\eBaySDK\Trading\Types\PaginatedOrderTransactionArrayType $WonList
 */
class GetMyeBayBuyingResponseType extends \DTS\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'BestOfferList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaginatedItemArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferList'
        ),
        'BidList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaginatedItemArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BidList'
        ),
        'BuyingSummary' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BuyingSummaryType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyingSummary'
        ),
        'DeletedFromLostList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaginatedItemArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DeletedFromLostList'
        ),
        'DeletedFromWonList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaginatedOrderTransactionArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DeletedFromWonList'
        ),
        'FavoriteSearches' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MyeBayFavoriteSearchListType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FavoriteSearches'
        ),
        'FavoriteSellers' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MyeBayFavoriteSellerListType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FavoriteSellers'
        ),
        'LostList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaginatedItemArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LostList'
        ),
        'SecondChanceOffer' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'SecondChanceOffer'
        ),
        'UserDefinedList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\UserDefinedListType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'UserDefinedList'
        ),
        'WatchList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaginatedItemArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WatchList'
        ),
        'WonList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaginatedOrderTransactionArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WonList'
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
