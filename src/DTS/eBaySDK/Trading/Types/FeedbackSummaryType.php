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
 * @property \DTS\eBaySDK\Trading\Types\FeedbackPeriodArrayType $BidRetractionFeedbackPeriodArray
 * @property \DTS\eBaySDK\Trading\Types\BuyerRoleMetricsType $BuyerRoleMetrics
 * @property \DTS\eBaySDK\Trading\Types\FeedbackPeriodArrayType $NegativeFeedbackPeriodArray
 * @property integer $NeutralCommentCountFromSuspendedUsers
 * @property \DTS\eBaySDK\Trading\Types\FeedbackPeriodArrayType $NeutralFeedbackPeriodArray
 * @property \DTS\eBaySDK\Trading\Types\FeedbackPeriodArrayType $PositiveFeedbackPeriodArray
 * @property \DTS\eBaySDK\Trading\Types\SellerRatingSummaryArrayType $SellerRatingSummaryArray
 * @property \DTS\eBaySDK\Trading\Types\SellerRoleMetricsType $SellerRoleMetrics
 * @property \DTS\eBaySDK\Trading\Types\FeedbackPeriodArrayType $TotalFeedbackPeriodArray
 * @property integer $UniqueNegativeFeedbackCount
 * @property integer $UniqueNeutralFeedbackCount
 * @property integer $UniquePositiveFeedbackCount
 */
class FeedbackSummaryType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'BidRetractionFeedbackPeriodArray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\FeedbackPeriodArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BidRetractionFeedbackPeriodArray'
        ),
        'BuyerRoleMetrics' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BuyerRoleMetricsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerRoleMetrics'
        ),
        'NegativeFeedbackPeriodArray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\FeedbackPeriodArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NegativeFeedbackPeriodArray'
        ),
        'NeutralCommentCountFromSuspendedUsers' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NeutralCommentCountFromSuspendedUsers'
        ),
        'NeutralFeedbackPeriodArray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\FeedbackPeriodArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NeutralFeedbackPeriodArray'
        ),
        'PositiveFeedbackPeriodArray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\FeedbackPeriodArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PositiveFeedbackPeriodArray'
        ),
        'SellerRatingSummaryArray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellerRatingSummaryArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerRatingSummaryArray'
        ),
        'SellerRoleMetrics' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellerRoleMetricsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerRoleMetrics'
        ),
        'TotalFeedbackPeriodArray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\FeedbackPeriodArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TotalFeedbackPeriodArray'
        ),
        'UniqueNegativeFeedbackCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UniqueNegativeFeedbackCount'
        ),
        'UniqueNeutralFeedbackCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UniqueNeutralFeedbackCount'
        ),
        'UniquePositiveFeedbackCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UniquePositiveFeedbackCount'
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
