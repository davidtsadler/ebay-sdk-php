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
 * @property \DTS\eBaySDK\Trading\Types\ItemListCustomizationType $ActiveList
 * @property \DTS\eBaySDK\Trading\Types\ItemListCustomizationType $BidList
 * @property \DTS\eBaySDK\Trading\Types\ItemListCustomizationType $DeletedFromSoldList
 * @property \DTS\eBaySDK\Trading\Types\ItemListCustomizationType $DeletedFromUnsoldList
 * @property boolean $HideVariations
 * @property \DTS\eBaySDK\Trading\Types\ItemListCustomizationType $ScheduledList
 * @property \DTS\eBaySDK\Trading\Types\ItemListCustomizationType $SellingSummary
 * @property \DTS\eBaySDK\Trading\Types\ItemListCustomizationType $SoldList
 * @property \DTS\eBaySDK\Trading\Types\ItemListCustomizationType $UnsoldList
 */
class GetMyeBaySellingRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'ActiveList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemListCustomizationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ActiveList'
        ),
        'BidList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemListCustomizationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BidList'
        ),
        'DeletedFromSoldList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemListCustomizationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DeletedFromSoldList'
        ),
        'DeletedFromUnsoldList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemListCustomizationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DeletedFromUnsoldList'
        ),
        'HideVariations' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HideVariations'
        ),
        'ScheduledList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemListCustomizationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ScheduledList'
        ),
        'SellingSummary' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemListCustomizationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellingSummary'
        ),
        'SoldList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemListCustomizationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SoldList'
        ),
        'UnsoldList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemListCustomizationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UnsoldList'
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'GetMyeBaySellingRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
