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

namespace DTS\eBaySDK\Shopping\Types;

/**
 *
 * @property string $Title
 * @property string $DetailsURL
 * @property string $StockPhotoURL
 * @property \DTS\eBaySDK\Shopping\Types\ShippingCostSummaryType $ShippingCostSummary
 * @property boolean $DisplayStockPhotos
 * @property integer $ItemCount
 * @property \DTS\eBaySDK\Shopping\Types\ProductIDType[] $ProductID
 * @property string $DomainName
 * @property \DTS\eBaySDK\Shopping\Types\NameValueListArrayType $ItemSpecifics
 * @property \DTS\eBaySDK\Shopping\Types\SimpleItemArrayType $ItemArray
 * @property integer $ReviewCount
 * @property \DTS\eBaySDK\Shopping\Types\AmountType $MinPrice
 */
class HalfCatalogProductType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'Title' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Title'
        ),
        'DetailsURL' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DetailsURL'
        ),
        'StockPhotoURL' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StockPhotoURL'
        ),
        'ShippingCostSummary' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\ShippingCostSummaryType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingCostSummary'
        ),
        'DisplayStockPhotos' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DisplayStockPhotos'
        ),
        'ItemCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemCount'
        ),
        'ProductID' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\ProductIDType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ProductID'
        ),
        'DomainName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DomainName'
        ),
        'ItemSpecifics' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\NameValueListArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemSpecifics'
        ),
        'ItemArray' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\SimpleItemArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemArray'
        ),
        'ReviewCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReviewCount'
        ),
        'MinPrice' => array(
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MinPrice'
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
