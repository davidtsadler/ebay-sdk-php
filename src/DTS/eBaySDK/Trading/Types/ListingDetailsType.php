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
 * @property boolean $Adult
 * @property boolean $BindingAuction
 * @property boolean $CheckoutEnabled
 * @property \DTS\eBaySDK\Trading\Types\AmountType $ConvertedBuyItNowPrice
 * @property \DTS\eBaySDK\Trading\Types\AmountType $ConvertedStartPrice
 * @property \DTS\eBaySDK\Trading\Types\AmountType $ConvertedReservePrice
 * @property boolean $HasReservePrice
 * @property string $RelistedItemID
 * @property string $SecondChanceOriginalItemID
 * @property \DateTime $StartTime
 * @property \DateTime $EndTime
 * @property string $ViewItemURL
 * @property boolean $HasUnansweredQuestions
 * @property boolean $HasPublicMessages
 * @property boolean $BuyItNowAvailable
 * @property \DTS\eBaySDK\Trading\Types\AmountType $MinimumBestOfferPrice
 * @property string $LocalListingDistance
 * @property string $TCROriginalItemID
 * @property string $ViewItemURLForNaturalSearch
 * @property \DTS\eBaySDK\Trading\Types\AmountType $BestOfferAutoAcceptPrice
 * @property \DTS\eBaySDK\Trading\Enums\EndReasonCodeType $EndingReason
 */
class ListingDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'Adult' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Adult'
        ),
        'BindingAuction' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BindingAuction'
        ),
        'CheckoutEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CheckoutEnabled'
        ),
        'ConvertedBuyItNowPrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConvertedBuyItNowPrice'
        ),
        'ConvertedStartPrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConvertedStartPrice'
        ),
        'ConvertedReservePrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConvertedReservePrice'
        ),
        'HasReservePrice' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HasReservePrice'
        ),
        'RelistedItemID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RelistedItemID'
        ),
        'SecondChanceOriginalItemID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SecondChanceOriginalItemID'
        ),
        'StartTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StartTime'
        ),
        'EndTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EndTime'
        ),
        'ViewItemURL' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ViewItemURL'
        ),
        'HasUnansweredQuestions' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HasUnansweredQuestions'
        ),
        'HasPublicMessages' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HasPublicMessages'
        ),
        'BuyItNowAvailable' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyItNowAvailable'
        ),
        'MinimumBestOfferPrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MinimumBestOfferPrice'
        ),
        'LocalListingDistance' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LocalListingDistance'
        ),
        'TCROriginalItemID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TCROriginalItemID'
        ),
        'ViewItemURLForNaturalSearch' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ViewItemURLForNaturalSearch'
        ),
        'BestOfferAutoAcceptPrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferAutoAcceptPrice'
        ),
        'EndingReason' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EndingReason'
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
