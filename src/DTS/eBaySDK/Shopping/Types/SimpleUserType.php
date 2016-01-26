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
 * @property string $UserID
 * @property boolean $FeedbackPrivate
 * @property \DTS\eBaySDK\Shopping\Enums\FeedbackRatingStarCodeType $FeedbackRatingStar
 * @property integer $FeedbackScore
 * @property boolean $UserAnonymized
 * @property boolean $NewUser
 * @property \DateTime $RegistrationDate
 * @property \DTS\eBaySDK\Shopping\Enums\SiteCodeType $RegistrationSite
 * @property \DTS\eBaySDK\Shopping\Enums\UserStatusCodeType $Status
 * @property \DTS\eBaySDK\Shopping\Enums\SellerBusinessCodeType $SellerBusinessType
 * @property string $StoreURL
 * @property string $StoreName
 * @property string $SellerItemsURL
 * @property string $AboutMeURL
 * @property string $MyWorldURL
 * @property string $MyWorldSmallImage
 * @property string $MyWorldLargeImage
 * @property string $ReviewsAndGuidesURL
 * @property string $FeedbackDetailsURL
 * @property double $PositiveFeedbackPercent
 * @property \DTS\eBaySDK\Shopping\Enums\SellerLevelCodeType $SellerLevel
 * @property boolean $TopRatedSeller
 */
class SimpleUserType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'UserID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UserID'
        ),
        'FeedbackPrivate' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackPrivate'
        ),
        'FeedbackRatingStar' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackRatingStar'
        ),
        'FeedbackScore' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackScore'
        ),
        'UserAnonymized' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UserAnonymized'
        ),
        'NewUser' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NewUser'
        ),
        'RegistrationDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RegistrationDate'
        ),
        'RegistrationSite' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RegistrationSite'
        ),
        'Status' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Status'
        ),
        'SellerBusinessType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerBusinessType'
        ),
        'StoreURL' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StoreURL'
        ),
        'StoreName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StoreName'
        ),
        'SellerItemsURL' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerItemsURL'
        ),
        'AboutMeURL' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AboutMeURL'
        ),
        'MyWorldURL' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MyWorldURL'
        ),
        'MyWorldSmallImage' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MyWorldSmallImage'
        ),
        'MyWorldLargeImage' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MyWorldLargeImage'
        ),
        'ReviewsAndGuidesURL' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReviewsAndGuidesURL'
        ),
        'FeedbackDetailsURL' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackDetailsURL'
        ),
        'PositiveFeedbackPercent' => array(
            'type' => 'double',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PositiveFeedbackPercent'
        ),
        'SellerLevel' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerLevel'
        ),
        'TopRatedSeller' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TopRatedSeller'
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
