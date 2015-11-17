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
 * @property \DTS\eBaySDK\Trading\Types\BidderNoticePreferencesType $BidderNoticePreferences
 * @property \DTS\eBaySDK\Trading\Types\CombinedPaymentPreferencesType $CombinedPaymentPreferences
 * @property \DTS\eBaySDK\Trading\Types\SellerPaymentPreferencesType $SellerPaymentPreferences
 * @property \DTS\eBaySDK\Trading\Types\SellerFavoriteItemPreferencesType $SellerFavoriteItemPreferences
 * @property \DTS\eBaySDK\Trading\Types\EndOfAuctionEmailPreferencesType $EndOfAuctionEmailPreferences
 * @property boolean $EmailShipmentTrackingNumberPreference
 * @property boolean $RequiredShipPhoneNumberPreference
 * @property \DTS\eBaySDK\Trading\Types\UnpaidItemAssistancePreferencesType $UnpaidItemAssistancePreferences
 * @property \DTS\eBaySDK\Trading\Types\SellerExcludeShipToLocationPreferencesType $SellerExcludeShipToLocationPreferences
 * @property \DTS\eBaySDK\Trading\Types\PurchaseReminderEmailPreferencesType $PurchaseReminderEmailPreferences
 * @property boolean $SellerThirdPartyCheckoutDisabled
 * @property \DTS\eBaySDK\Trading\Types\SellerProfilePreferencesType $SellerProfilePreferences
 * @property \DTS\eBaySDK\Trading\Types\SellerReturnPreferencesType $SellerReturnPreferences
 * @property boolean $OfferGlobalShippingProgramPreference
 * @property \DTS\eBaySDK\Trading\Types\DispatchCutoffTimePreferencesType $DispatchCutoffTimePreference
 * @property boolean $GlobalShippingProgramListingPreference
 * @property boolean $OverrideGSPServiceWithIntlServicePreference
 * @property boolean $PickupDropoffSellerPreference
 * @property boolean $OutOfStockControlPreference
 * @property \DTS\eBaySDK\Trading\Types\EBayPLUSPreferenceType[] $eBayPLUSPreference
 */
class GetUserPreferencesResponseType extends \DTS\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'BidderNoticePreferences' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BidderNoticePreferencesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BidderNoticePreferences'
        ),
        'CombinedPaymentPreferences' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CombinedPaymentPreferencesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CombinedPaymentPreferences'
        ),
        'SellerPaymentPreferences' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellerPaymentPreferencesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerPaymentPreferences'
        ),
        'SellerFavoriteItemPreferences' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellerFavoriteItemPreferencesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerFavoriteItemPreferences'
        ),
        'EndOfAuctionEmailPreferences' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EndOfAuctionEmailPreferencesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EndOfAuctionEmailPreferences'
        ),
        'EmailShipmentTrackingNumberPreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EmailShipmentTrackingNumberPreference'
        ),
        'RequiredShipPhoneNumberPreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RequiredShipPhoneNumberPreference'
        ),
        'UnpaidItemAssistancePreferences' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\UnpaidItemAssistancePreferencesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UnpaidItemAssistancePreferences'
        ),
        'SellerExcludeShipToLocationPreferences' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellerExcludeShipToLocationPreferencesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerExcludeShipToLocationPreferences'
        ),
        'PurchaseReminderEmailPreferences' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PurchaseReminderEmailPreferencesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PurchaseReminderEmailPreferences'
        ),
        'SellerThirdPartyCheckoutDisabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerThirdPartyCheckoutDisabled'
        ),
        'SellerProfilePreferences' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellerProfilePreferencesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerProfilePreferences'
        ),
        'SellerReturnPreferences' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellerReturnPreferencesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerReturnPreferences'
        ),
        'OfferGlobalShippingProgramPreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OfferGlobalShippingProgramPreference'
        ),
        'DispatchCutoffTimePreference' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\DispatchCutoffTimePreferencesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DispatchCutoffTimePreference'
        ),
        'GlobalShippingProgramListingPreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GlobalShippingProgramListingPreference'
        ),
        'OverrideGSPServiceWithIntlServicePreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OverrideGSPServiceWithIntlServicePreference'
        ),
        'PickupDropoffSellerPreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PickupDropoffSellerPreference'
        ),
        'OutOfStockControlPreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OutOfStockControlPreference'
        ),
        'eBayPLUSPreference' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\EBayPLUSPreferenceType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'eBayPLUSPreference'
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
