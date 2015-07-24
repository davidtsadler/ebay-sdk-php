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
 * @property \DTS\eBaySDK\Trading\Types\BiddingSummaryType $BiddingSummary
 * @property string $BillingEmail
 * @property \DTS\eBaySDK\Trading\Enums\BusinessRoleType $BusinessRole
 * @property \DTS\eBaySDK\Trading\Types\BuyerType $BuyerInfo
 * @property string $EIASToken
 * @property string $Email
 * @property boolean $EnterpriseSeller
 * @property boolean $FeedbackPrivate
 * @property \DTS\eBaySDK\Trading\Enums\FeedbackRatingStarCodeType $FeedbackRatingStar
 * @property integer $FeedbackScore
 * @property boolean $IDVerified
 * @property boolean $MotorsDealer
 * @property boolean $NewUser
 * @property \DTS\eBaySDK\Trading\Enums\PayPalAccountLevelCodeType $PayPalAccountLevel
 * @property \DTS\eBaySDK\Trading\Enums\PayPalAccountStatusCodeType $PayPalAccountStatus
 * @property \DTS\eBaySDK\Trading\Enums\PayPalAccountTypeCodeType $PayPalAccountType
 * @property double $PositiveFeedbackPercent
 * @property boolean $QualifiesForSelling
 * @property \DTS\eBaySDK\Trading\Types\AddressType $RegistrationAddress
 * @property \DateTime $RegistrationDate
 * @property \DTS\eBaySDK\Trading\Types\SellerType $SellerInfo
 * @property \DTS\eBaySDK\Trading\Types\AddressType $ShippingAddress
 * @property \DTS\eBaySDK\Trading\Enums\SiteCodeType $Site
 * @property boolean $SiteVerified
 * @property string[] $SkypeID
 * @property string $StaticAlias
 * @property \DTS\eBaySDK\Trading\Enums\UserStatusCodeType $Status
 * @property integer $TUVLevel
 * @property integer $UniqueNegativeFeedbackCount
 * @property integer $UniqueNeutralFeedbackCount
 * @property integer $UniquePositiveFeedbackCount
 * @property boolean $UserAnonymized
 * @property string $UserFirstName
 * @property string $UserID
 * @property boolean $UserIDChanged
 * @property \DateTime $UserIDLastChanged
 * @property string $UserLastName
 * @property \DTS\eBaySDK\Trading\Enums\EBaySubscriptionTypeCodeType[] $UserSubscription
 * @property string $VATID
 * @property \DTS\eBaySDK\Trading\Enums\VATStatusCodeType $VATStatus
 * @property boolean $eBayGoodStanding
 * @property boolean $eBayWikiReadOnly
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
        'BiddingSummary' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BiddingSummaryType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BiddingSummary'
        ),
        'BillingEmail' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BillingEmail'
        ),
        'BusinessRole' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BusinessRole'
        ),
        'BuyerInfo' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BuyerType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerInfo'
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
        'EnterpriseSeller' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EnterpriseSeller'
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
        'IDVerified' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IDVerified'
        ),
        'MotorsDealer' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MotorsDealer'
        ),
        'NewUser' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NewUser'
        ),
        'PayPalAccountLevel' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalAccountLevel'
        ),
        'PayPalAccountStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalAccountStatus'
        ),
        'PayPalAccountType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalAccountType'
        ),
        'PositiveFeedbackPercent' => array(
            'type' => 'double',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PositiveFeedbackPercent'
        ),
        'QualifiesForSelling' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QualifiesForSelling'
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
        'SellerInfo' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellerType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerInfo'
        ),
        'ShippingAddress' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AddressType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingAddress'
        ),
        'Site' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Site'
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
        'StaticAlias' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StaticAlias'
        ),
        'Status' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Status'
        ),
        'TUVLevel' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TUVLevel'
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
        ),
        'UserAnonymized' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UserAnonymized'
        ),
        'UserFirstName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UserFirstName'
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
        'UserLastName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UserLastName'
        ),
        'UserSubscription' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'UserSubscription'
        ),
        'VATID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VATID'
        ),
        'VATStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VATStatus'
        ),
        'eBayGoodStanding' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayGoodStanding'
        ),
        'eBayWikiReadOnly' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayWikiReadOnly'
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
