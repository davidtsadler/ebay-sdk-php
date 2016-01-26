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

namespace DTS\eBaySDK\HalfFinding\Types;

/**
 *
 * @property string $itemID
 * @property string $itemURL
 * @property integer $quantity
 * @property \DTS\eBaySDK\HalfFinding\Types\UserType $seller
 * @property \DTS\eBaySDK\HalfFinding\Types\Amount $price
 * @property \DTS\eBaySDK\HalfFinding\Types\RentalAmount[] $rentalPrice
 * @property \DTS\eBaySDK\HalfFinding\Types\ShippingServiceOptionsType[] $shippingService
 * @property string $itemLocation
 * @property string $excludedShippingAreas
 * @property \DTS\eBaySDK\HalfFinding\Enums\HalfItemConditionCodeType $condition
 * @property string $comments
 * @property string $description
 * @property \DTS\eBaySDK\HalfFinding\Types\StorefrontType $storefront
 */
class ItemType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'itemID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'itemID'
        ),
        'itemURL' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'itemURL'
        ),
        'quantity' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'quantity'
        ),
        'seller' => array(
            'type' => 'DTS\eBaySDK\HalfFinding\Types\UserType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'seller'
        ),
        'price' => array(
            'type' => 'DTS\eBaySDK\HalfFinding\Types\Amount',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'price'
        ),
        'rentalPrice' => array(
            'type' => 'DTS\eBaySDK\HalfFinding\Types\RentalAmount',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'rentalPrice'
        ),
        'shippingService' => array(
            'type' => 'DTS\eBaySDK\HalfFinding\Types\ShippingServiceOptionsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'shippingService'
        ),
        'itemLocation' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'itemLocation'
        ),
        'excludedShippingAreas' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'excludedShippingAreas'
        ),
        'condition' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'condition'
        ),
        'comments' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'comments'
        ),
        'description' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'description'
        ),
        'storefront' => array(
            'type' => 'DTS\eBaySDK\HalfFinding\Types\StorefrontType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'storefront'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/half/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
