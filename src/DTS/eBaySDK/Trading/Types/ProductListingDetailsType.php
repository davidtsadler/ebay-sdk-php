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
 * @property string $ProductID
 * @property boolean $IncludeStockPhotoURL
 * @property boolean $UseStockPhotoURLAsGallery
 * @property string $StockPhotoURL
 * @property string[] $Copyright
 * @property string $ProductReferenceID
 * @property string $DetailsURL
 * @property string $ProductDetailsURL
 * @property boolean $ReturnSearchResultOnDuplicates
 * @property string $ISBN
 * @property string $UPC
 * @property string $EAN
 * @property \DTS\eBaySDK\Trading\Types\BrandMPNType $BrandMPN
 * @property \DTS\eBaySDK\Trading\Types\TicketListingDetailsType $TicketListingDetails
 * @property boolean $UseFirstProduct
 * @property boolean $IncludeeBayProductDetails
 */
class ProductListingDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'ProductID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductID'
        ),
        'IncludeStockPhotoURL' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IncludeStockPhotoURL'
        ),
        'UseStockPhotoURLAsGallery' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UseStockPhotoURLAsGallery'
        ),
        'StockPhotoURL' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StockPhotoURL'
        ),
        'Copyright' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'Copyright'
        ),
        'ProductReferenceID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductReferenceID'
        ),
        'DetailsURL' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DetailsURL'
        ),
        'ProductDetailsURL' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductDetailsURL'
        ),
        'ReturnSearchResultOnDuplicates' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnSearchResultOnDuplicates'
        ),
        'ISBN' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ISBN'
        ),
        'UPC' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UPC'
        ),
        'EAN' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EAN'
        ),
        'BrandMPN' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BrandMPNType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BrandMPN'
        ),
        'TicketListingDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\TicketListingDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TicketListingDetails'
        ),
        'UseFirstProduct' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UseFirstProduct'
        ),
        'IncludeeBayProductDetails' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IncludeeBayProductDetails'
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
