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

namespace DTS\eBaySDK\MerchantData\Types;

/**
 *
 * @property \DTS\eBaySDK\MerchantData\Types\BrandMPNType $BrandMPN
 * @property string[] $Copyright
 * @property string $DetailsURL
 * @property string $EAN
 * @property string $ISBN
 * @property boolean $IncludePrefilledItemInformation
 * @property boolean $IncludeStockPhotoURL
 * @property string $ProductDetailsURL
 * @property string $ProductID
 * @property string $ProductReferenceID
 * @property boolean $ReturnSearchResultOnDuplicates
 * @property string $StockPhotoURL
 * @property \DTS\eBaySDK\MerchantData\Types\TicketListingDetailsType $TicketListingDetails
 * @property string $UPC
 * @property boolean $UseFirstProduct
 * @property boolean $UseStockPhotoURLAsGallery
 */
class ProductListingDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'BrandMPN' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\BrandMPNType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BrandMPN'
        ),
        'Copyright' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'Copyright'
        ),
        'DetailsURL' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DetailsURL'
        ),
        'EAN' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EAN'
        ),
        'ISBN' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ISBN'
        ),
        'IncludePrefilledItemInformation' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IncludePrefilledItemInformation'
        ),
        'IncludeStockPhotoURL' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IncludeStockPhotoURL'
        ),
        'ProductDetailsURL' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductDetailsURL'
        ),
        'ProductID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductID'
        ),
        'ProductReferenceID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductReferenceID'
        ),
        'ReturnSearchResultOnDuplicates' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnSearchResultOnDuplicates'
        ),
        'StockPhotoURL' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StockPhotoURL'
        ),
        'TicketListingDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\TicketListingDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TicketListingDetails'
        ),
        'UPC' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UPC'
        ),
        'UseFirstProduct' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UseFirstProduct'
        ),
        'UseStockPhotoURLAsGallery' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UseStockPhotoURLAsGallery'
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
