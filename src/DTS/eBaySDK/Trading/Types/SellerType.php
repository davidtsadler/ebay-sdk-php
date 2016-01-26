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
 * @property integer $PaisaPayStatus
 * @property boolean $AllowPaymentEdit
 * @property \DTS\eBaySDK\Trading\Enums\CurrencyCodeType $BillingCurrency
 * @property boolean $CheckoutEnabled
 * @property boolean $CIPBankAccountStored
 * @property boolean $GoodStanding
 * @property boolean $QualifiesForB2BVAT
 * @property \DTS\eBaySDK\Trading\Enums\SellerLevelCodeType $SellerLevel
 * @property \DTS\eBaySDK\Trading\Types\AddressType $SellerPaymentAddress
 * @property \DTS\eBaySDK\Trading\Types\SchedulingInfoType $SchedulingInfo
 * @property boolean $StoreOwner
 * @property string $StoreURL
 * @property \DTS\eBaySDK\Trading\Enums\SellerBusinessCodeType $SellerBusinessType
 * @property boolean $RegisteredBusinessSeller
 * @property \DTS\eBaySDK\Trading\Enums\SiteCodeType $StoreSite
 * @property \DTS\eBaySDK\Trading\Enums\SellerPaymentMethodCodeType $PaymentMethod
 * @property boolean $CharityRegistered
 * @property boolean $SafePaymentExempt
 * @property integer $PaisaPayEscrowEMIStatus
 * @property \DTS\eBaySDK\Trading\Types\CharityAffiliationDetailsType $CharityAffiliationDetails
 * @property double $TransactionPercent
 * @property \DTS\eBaySDK\Trading\Types\IntegratedMerchantCreditCardInfoType $IntegratedMerchantCreditCardInfo
 * @property \DTS\eBaySDK\Trading\Types\FeatureEligibilityType $FeatureEligibility
 * @property boolean $TopRatedSeller
 * @property \DTS\eBaySDK\Trading\Types\TopRatedSellerDetailsType $TopRatedSellerDetails
 * @property \DTS\eBaySDK\Trading\Types\RecoupmentPolicyConsentType $RecoupmentPolicyConsent
 * @property boolean $DomesticRateTable
 */
class SellerType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'PaisaPayStatus' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaisaPayStatus'
        ),
        'AllowPaymentEdit' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AllowPaymentEdit'
        ),
        'BillingCurrency' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BillingCurrency'
        ),
        'CheckoutEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CheckoutEnabled'
        ),
        'CIPBankAccountStored' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CIPBankAccountStored'
        ),
        'GoodStanding' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GoodStanding'
        ),
        'QualifiesForB2BVAT' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QualifiesForB2BVAT'
        ),
        'SellerLevel' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerLevel'
        ),
        'SellerPaymentAddress' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AddressType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerPaymentAddress'
        ),
        'SchedulingInfo' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SchedulingInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SchedulingInfo'
        ),
        'StoreOwner' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StoreOwner'
        ),
        'StoreURL' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StoreURL'
        ),
        'SellerBusinessType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerBusinessType'
        ),
        'RegisteredBusinessSeller' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RegisteredBusinessSeller'
        ),
        'StoreSite' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StoreSite'
        ),
        'PaymentMethod' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentMethod'
        ),
        'CharityRegistered' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CharityRegistered'
        ),
        'SafePaymentExempt' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SafePaymentExempt'
        ),
        'PaisaPayEscrowEMIStatus' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaisaPayEscrowEMIStatus'
        ),
        'CharityAffiliationDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CharityAffiliationDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CharityAffiliationDetails'
        ),
        'TransactionPercent' => array(
            'type' => 'double',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TransactionPercent'
        ),
        'IntegratedMerchantCreditCardInfo' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\IntegratedMerchantCreditCardInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IntegratedMerchantCreditCardInfo'
        ),
        'FeatureEligibility' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\FeatureEligibilityType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeatureEligibility'
        ),
        'TopRatedSeller' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TopRatedSeller'
        ),
        'TopRatedSellerDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\TopRatedSellerDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TopRatedSellerDetails'
        ),
        'RecoupmentPolicyConsent' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\RecoupmentPolicyConsentType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RecoupmentPolicyConsent'
        ),
        'DomesticRateTable' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DomesticRateTable'
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
