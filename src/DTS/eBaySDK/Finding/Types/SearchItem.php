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
 * @property string $itemId
 * @property string $title
 * @property string $globalId
 * @property string $subtitle
 * @property \DTS\eBaySDK\Finding\Types\Category $primaryCategory
 * @property \DTS\eBaySDK\Finding\Types\Category $secondaryCategory
 * @property string $galleryURL
 * @property \DTS\eBaySDK\Finding\Types\GalleryInfoContainer $galleryInfoContainer
 * @property string $viewItemURL
 * @property string $charityId
 * @property \DTS\eBaySDK\Finding\Types\ProductId $productId
 * @property string[] $paymentMethod
 * @property boolean $autoPay
 * @property string $postalCode
 * @property string $location
 * @property string $country
 * @property \DTS\eBaySDK\Finding\Types\Storefront $storeInfo
 * @property \DTS\eBaySDK\Finding\Types\SellerInfo $sellerInfo
 * @property \DTS\eBaySDK\Finding\Types\ShippingInfo $shippingInfo
 * @property \DTS\eBaySDK\Finding\Types\SellingStatus $sellingStatus
 * @property \DTS\eBaySDK\Finding\Types\ListingInfo $listingInfo
 * @property boolean $returnsAccepted
 * @property string[] $galleryPlusPictureURL
 * @property string $compatibility
 * @property \DTS\eBaySDK\Finding\Types\Distance $distance
 * @property \DTS\eBaySDK\Finding\Types\Condition $condition
 * @property boolean $isMultiVariationListing
 * @property \DTS\eBaySDK\Finding\Types\DiscountPriceInfo $discountPriceInfo
 * @property string $pictureURLSuperSize
 * @property string $pictureURLLarge
 * @property \DTS\eBaySDK\Finding\Types\UnitPriceInfo $unitPrice
 * @property \DTS\eBaySDK\Finding\Types\ItemAttribute[] $attribute
 * @property boolean $topRatedListing
 * @property string[] $eekStatus
 */
class SearchItem extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'itemId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'itemId'
        ),
        'title' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'title'
        ),
        'globalId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'globalId'
        ),
        'subtitle' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'subtitle'
        ),
        'primaryCategory' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\Category',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'primaryCategory'
        ),
        'secondaryCategory' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\Category',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'secondaryCategory'
        ),
        'galleryURL' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'galleryURL'
        ),
        'galleryInfoContainer' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\GalleryInfoContainer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'galleryInfoContainer'
        ),
        'viewItemURL' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'viewItemURL'
        ),
        'charityId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'charityId'
        ),
        'productId' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\ProductId',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'productId'
        ),
        'paymentMethod' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'paymentMethod'
        ),
        'autoPay' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'autoPay'
        ),
        'postalCode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'postalCode'
        ),
        'location' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'location'
        ),
        'country' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'country'
        ),
        'storeInfo' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\Storefront',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'storeInfo'
        ),
        'sellerInfo' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\SellerInfo',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'sellerInfo'
        ),
        'shippingInfo' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\ShippingInfo',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'shippingInfo'
        ),
        'sellingStatus' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\SellingStatus',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'sellingStatus'
        ),
        'listingInfo' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\ListingInfo',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'listingInfo'
        ),
        'returnsAccepted' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'returnsAccepted'
        ),
        'galleryPlusPictureURL' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'galleryPlusPictureURL'
        ),
        'compatibility' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'compatibility'
        ),
        'distance' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\Distance',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'distance'
        ),
        'condition' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\Condition',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'condition'
        ),
        'isMultiVariationListing' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'isMultiVariationListing'
        ),
        'discountPriceInfo' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\DiscountPriceInfo',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'discountPriceInfo'
        ),
        'pictureURLSuperSize' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'pictureURLSuperSize'
        ),
        'pictureURLLarge' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'pictureURLLarge'
        ),
        'unitPrice' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\UnitPriceInfo',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'unitPrice'
        ),
        'attribute' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\ItemAttribute',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'attribute'
        ),
        'topRatedListing' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'topRatedListing'
        ),
        'eekStatus' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'eekStatus'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/search/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
