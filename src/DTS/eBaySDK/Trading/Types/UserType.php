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
 * @property boolean $AboutMePage
 * @property string $EIASToken
 * @property string $Email
 * @property integer $FeedbackScore
 * @property integer $UniqueNegativeFeedbackCount
 * @property integer $UniquePositiveFeedbackCount
 * @property double $PositiveFeedbackPercent
 * @property boolean $FeedbackPrivate
 * @property \DTS\eBaySDK\Trading\Enums\FeedbackRatingStarCodeType $FeedbackRatingStar
 * @property boolean $IDVerified
 * @property boolean $eBayGoodStanding
 * @property boolean $NewUser
 * @property \DTS\eBaySDK\Trading\Types\AddressType $RegistrationAddress
 * @property \DateTime $RegistrationDate
 * @property \DTS\eBaySDK\Trading\Enums\SiteCodeType $Site
 * @property \DTS\eBaySDK\Trading\Enums\UserStatusCodeType $Status
 * @property string $UserID
 * @property boolean $UserIDChanged
 * @property \DateTime $UserIDLastChanged
 * @property \DTS\eBaySDK\Trading\Enums\VATStatusCodeType $VATStatus
 * @property \DTS\eBaySDK\Trading\Types\BuyerType $BuyerInfo
 * @property \DTS\eBaySDK\Trading\Types\SellerType $SellerInfo
 * @property \DTS\eBaySDK\Trading\Enums\BusinessRoleType $BusinessRole
 * @property \DTS\eBaySDK\Trading\Enums\PayPalAccountLevelCodeType $PayPalAccountLevel
 * @property \DTS\eBaySDK\Trading\Enums\PayPalAccountTypeCodeType $PayPalAccountType
 * @property \DTS\eBaySDK\Trading\Enums\PayPalAccountStatusCodeType $PayPalAccountStatus
 * @property \DTS\eBaySDK\Trading\Enums\EBaySubscriptionTypeCodeType[] $UserSubscription
 * @property boolean $SiteVerified
 * @property string[] $SkypeID
 * @property boolean $eBayWikiReadOnly
 * @property integer $TUVLevel
 * @property string $VATID
 * @property boolean $MotorsDealer
 * @property \DTS\eBaySDK\Trading\Types\BiddingSummaryType $BiddingSummary
 * @property boolean $UserAnonymized
 * @property integer $UniqueNeutralFeedbackCount
 * @property boolean $EnterpriseSeller
 * @property string $BillingEmail
 * @property boolean $QualifiesForSelling
 * @property string $StaticAlias
 * @property \DTS\eBaySDK\Trading\Types\AddressType $ShippingAddress
 * @property string $UserFirstName
 * @property string $UserLastName
 */
class UserType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'AboutMePage' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AboutMePage'
        ),
        'EIASToken' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EIASToken'
        ),
        'Email' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Email'
        ),
        'FeedbackScore' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackScore'
        ),
        'UniqueNegativeFeedbackCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UniqueNegativeFeedbackCount'
        ),
        'UniquePositiveFeedbackCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UniquePositiveFeedbackCount'
        ),
        'PositiveFeedbackPercent' => array(
            'type' => 'double',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PositiveFeedbackPercent'
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
        'IDVerified' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IDVerified'
        ),
        'eBayGoodStanding' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayGoodStanding'
        ),
        'NewUser' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NewUser'
        ),
        'RegistrationAddress' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AddressType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RegistrationAddress'
        ),
        'RegistrationDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RegistrationDate'
        ),
        'Site' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Site'
        ),
        'Status' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Status'
        ),
        'UserID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UserID'
        ),
        'UserIDChanged' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UserIDChanged'
        ),
        'UserIDLastChanged' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UserIDLastChanged'
        ),
        'VATStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VATStatus'
        ),
        'BuyerInfo' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BuyerType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerInfo'
        ),
        'SellerInfo' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellerType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerInfo'
        ),
        'BusinessRole' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BusinessRole'
        ),
        'PayPalAccountLevel' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalAccountLevel'
        ),
        'PayPalAccountType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalAccountType'
        ),
        'PayPalAccountStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalAccountStatus'
        ),
        'UserSubscription' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'UserSubscription'
        ),
        'SiteVerified' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SiteVerified'
        ),
        'SkypeID' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'SkypeID'
        ),
        'eBayWikiReadOnly' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayWikiReadOnly'
        ),
        'TUVLevel' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TUVLevel'
        ),
        'VATID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VATID'
        ),
        'MotorsDealer' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MotorsDealer'
        ),
        'BiddingSummary' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BiddingSummaryType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BiddingSummary'
        ),
        'UserAnonymized' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UserAnonymized'
        ),
        'UniqueNeutralFeedbackCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UniqueNeutralFeedbackCount'
        ),
        'EnterpriseSeller' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EnterpriseSeller'
        ),
        'BillingEmail' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BillingEmail'
        ),
        'QualifiesForSelling' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QualifiesForSelling'
        ),
        'StaticAlias' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StaticAlias'
        ),
        'ShippingAddress' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AddressType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingAddress'
        ),
        'UserFirstName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UserFirstName'
        ),
        'UserLastName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UserLastName'
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
