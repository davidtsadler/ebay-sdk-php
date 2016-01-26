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
 * @property string $title
 * @property string $detailsURL
 * @property string $stockPhotoURL
 * @property \DTS\eBaySDK\HalfFinding\Types\ProductIDType[] $productID
 * @property string[] $categoryName
 * @property \DTS\eBaySDK\HalfFinding\Types\NameValueListArrayType $itemSpecifics
 * @property \DTS\eBaySDK\HalfFinding\Types\ItemType[] $item
 * @property \DTS\eBaySDK\HalfFinding\Types\Amount $listPrice
 * @property integer $reviewCount
 * @property \DTS\eBaySDK\HalfFinding\Types\Amount $BestFixedPrice
 * @property \DTS\eBaySDK\HalfFinding\Types\Amount $BestRentalPrice
 */
class HalfCatalogProductType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'title' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'title'
        ),
        'detailsURL' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'detailsURL'
        ),
        'stockPhotoURL' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'stockPhotoURL'
        ),
        'productID' => array(
            'type' => 'DTS\eBaySDK\HalfFinding\Types\ProductIDType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'productID'
        ),
        'categoryName' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'categoryName'
        ),
        'itemSpecifics' => array(
            'type' => 'DTS\eBaySDK\HalfFinding\Types\NameValueListArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'itemSpecifics'
        ),
        'item' => array(
            'type' => 'DTS\eBaySDK\HalfFinding\Types\ItemType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'item'
        ),
        'listPrice' => array(
            'type' => 'DTS\eBaySDK\HalfFinding\Types\Amount',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'listPrice'
        ),
        'reviewCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'reviewCount'
        ),
        'BestFixedPrice' => array(
            'type' => 'DTS\eBaySDK\HalfFinding\Types\Amount',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestFixedPrice'
        ),
        'BestRentalPrice' => array(
            'type' => 'DTS\eBaySDK\HalfFinding\Types\Amount',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestRentalPrice'
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
