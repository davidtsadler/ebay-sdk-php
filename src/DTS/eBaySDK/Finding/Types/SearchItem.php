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

namespace DTS\eBaySDK\Finding\Types;

/**
 *
 * @property \DTS\eBaySDK\Finding\Types\ItemAttribute[] $attribute
 * @property boolean $autoPay
 * @property string $charityId
 * @property string $compatibility
 * @property \DTS\eBaySDK\Finding\Types\Condition $condition
 * @property string $country
 * @property \DTS\eBaySDK\Finding\Types\DiscountPriceInfo $discountPriceInfo
 * @property \DTS\eBaySDK\Finding\Types\Distance $distance
 * @property string[] $eekStatus
 * @property \DTS\eBaySDK\Finding\Types\GalleryInfoContainer $galleryInfoContainer
 * @property string[] $galleryPlusPictureURL
 * @property string $galleryURL
 * @property string $globalId
 * @property boolean $isMultiVariationListing
 * @property string $itemId
 * @property \DTS\eBaySDK\Finding\Types\ListingInfo $listingInfo
 * @property string $location
 * @property string[] $paymentMethod
 * @property string $pictureURLLarge
 * @property string $pictureURLSuperSize
 * @property string $postalCode
 * @property \DTS\eBaySDK\Finding\Types\Category $primaryCategory
 * @property \DTS\eBaySDK\Finding\Types\ProductId $productId
 * @property boolean $returnsAccepted
 * @property \DTS\eBaySDK\Finding\Types\Category $secondaryCategory
 * @property \DTS\eBaySDK\Finding\Types\SellerInfo $sellerInfo
 * @property \DTS\eBaySDK\Finding\Types\SellingStatus $sellingStatus
 * @property \DTS\eBaySDK\Finding\Types\ShippingInfo $shippingInfo
 * @property \DTS\eBaySDK\Finding\Types\Storefront $storeInfo
 * @property string $subtitle
 * @property string $title
 * @property boolean $topRatedListing
 * @property \DTS\eBaySDK\Finding\Types\UnitPriceInfo $unitPrice
 * @property string $viewItemURL
 */
class SearchItem extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'attribute' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\ItemAttribute',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'attribute'
        ),
        'autoPay' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'autoPay'
        ),
        'charityId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'charityId'
        ),
        'compatibility' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'compatibility'
        ),
        'condition' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\Condition',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'condition'
        ),
        'country' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'country'
        ),
        'discountPriceInfo' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\DiscountPriceInfo',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'discountPriceInfo'
        ),
        'distance' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\Distance',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'distance'
        ),
        'eekStatus' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'eekStatus'
        ),
        'galleryInfoContainer' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\GalleryInfoContainer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'galleryInfoContainer'
        ),
        'galleryPlusPictureURL' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'galleryPlusPictureURL'
        ),
        'galleryURL' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'galleryURL'
        ),
        'globalId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'globalId'
        ),
        'isMultiVariationListing' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'isMultiVariationListing'
        ),
        'itemId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'itemId'
        ),
        'listingInfo' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\ListingInfo',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'listingInfo'
        ),
        'location' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'location'
        ),
        'paymentMethod' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'paymentMethod'
        ),
        'pictureURLLarge' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'pictureURLLarge'
        ),
        'pictureURLSuperSize' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'pictureURLSuperSize'
        ),
        'postalCode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'postalCode'
        ),
        'primaryCategory' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\Category',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'primaryCategory'
        ),
        'productId' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\ProductId',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'productId'
        ),
        'returnsAccepted' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'returnsAccepted'
        ),
        'secondaryCategory' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\Category',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'secondaryCategory'
        ),
        'sellerInfo' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\SellerInfo',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'sellerInfo'
        ),
        'sellingStatus' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\SellingStatus',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'sellingStatus'
        ),
        'shippingInfo' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\ShippingInfo',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'shippingInfo'
        ),
        'storeInfo' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\Storefront',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'storeInfo'
        ),
        'subtitle' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'subtitle'
        ),
        'title' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'title'
        ),
        'topRatedListing' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'topRatedListing'
        ),
        'unitPrice' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\UnitPriceInfo',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'unitPrice'
        ),
        'viewItemURL' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'viewItemURL'
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
            self::$xmlNamespaces[__CLASS__] = 'http://www.ebay.com/marketplace/search/v1/services';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
