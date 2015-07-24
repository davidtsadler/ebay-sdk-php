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
 * @property boolean $AllowPaymentEdit
 * @property \DTS\eBaySDK\Trading\Enums\CurrencyCodeType $BillingCurrency
 * @property boolean $CIPBankAccountStored
 * @property \DTS\eBaySDK\Trading\Types\CharityAffiliationDetailsType $CharityAffiliationDetails
 * @property boolean $CharityRegistered
 * @property boolean $CheckoutEnabled
 * @property boolean $DomesticRateTable
 * @property \DTS\eBaySDK\Trading\Types\FeatureEligibilityType $FeatureEligibility
 * @property boolean $GoodStanding
 * @property \DTS\eBaySDK\Trading\Types\IntegratedMerchantCreditCardInfoType $IntegratedMerchantCreditCardInfo
 * @property \DTS\eBaySDK\Trading\Enums\MerchandizingPrefCodeType $MerchandizingPref
 * @property integer $PaisaPayEscrowEMIStatus
 * @property integer $PaisaPayStatus
 * @property \DTS\eBaySDK\Trading\Enums\SellerPaymentMethodCodeType $PaymentMethod
 * @property \DTS\eBaySDK\Trading\Types\ProStoresCheckoutPreferenceType $ProStoresPreference
 * @property boolean $QualifiesForB2BVAT
 * @property \DTS\eBaySDK\Trading\Types\RecoupmentPolicyConsentType $RecoupmentPolicyConsent
 * @property boolean $RegisteredBusinessSeller
 * @property boolean $SafePaymentExempt
 * @property \DTS\eBaySDK\Trading\Types\SchedulingInfoType $SchedulingInfo
 * @property \DTS\eBaySDK\Trading\Enums\SellerBusinessCodeType $SellerBusinessType
 * @property \DTS\eBaySDK\Trading\Enums\SellerLevelCodeType $SellerLevel
 * @property \DTS\eBaySDK\Trading\Types\AddressType $SellerPaymentAddress
 * @property boolean $StoreOwner
 * @property \DTS\eBaySDK\Trading\Enums\SiteCodeType $StoreSite
 * @property string $StoreURL
 * @property boolean $TopRatedSeller
 * @property \DTS\eBaySDK\Trading\Types\TopRatedSellerDetailsType $TopRatedSellerDetails
 * @property double $TransactionPercent
 */
class SellerType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
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
        'CIPBankAccountStored' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CIPBankAccountStored'
        ),
        'CharityAffiliationDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CharityAffiliationDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CharityAffiliationDetails'
        ),
        'CharityRegistered' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CharityRegistered'
        ),
        'CheckoutEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CheckoutEnabled'
        ),
        'DomesticRateTable' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DomesticRateTable'
        ),
        'FeatureEligibility' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\FeatureEligibilityType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeatureEligibility'
        ),
        'GoodStanding' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GoodStanding'
        ),
        'IntegratedMerchantCreditCardInfo' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\IntegratedMerchantCreditCardInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IntegratedMerchantCreditCardInfo'
        ),
        'MerchandizingPref' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MerchandizingPref'
        ),
        'PaisaPayEscrowEMIStatus' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaisaPayEscrowEMIStatus'
        ),
        'PaisaPayStatus' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaisaPayStatus'
        ),
        'PaymentMethod' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentMethod'
        ),
        'ProStoresPreference' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ProStoresCheckoutPreferenceType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProStoresPreference'
        ),
        'QualifiesForB2BVAT' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QualifiesForB2BVAT'
        ),
        'RecoupmentPolicyConsent' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\RecoupmentPolicyConsentType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RecoupmentPolicyConsent'
        ),
        'RegisteredBusinessSeller' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RegisteredBusinessSeller'
        ),
        'SafePaymentExempt' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SafePaymentExempt'
        ),
        'SchedulingInfo' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SchedulingInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SchedulingInfo'
        ),
        'SellerBusinessType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerBusinessType'
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
        'StoreOwner' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StoreOwner'
        ),
        'StoreSite' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StoreSite'
        ),
        'StoreURL' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StoreURL'
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
        'TransactionPercent' => array(
            'type' => 'double',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TransactionPercent'
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
