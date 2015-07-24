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
 * @property boolean $ShowBidderNoticePreferences
 * @property boolean $ShowCombinedPaymentPreferences
 * @property boolean $ShowDispatchCutoffTimePreferences
 * @property boolean $ShowEmailShipmentTrackingNumberPreference
 * @property boolean $ShowEndOfAuctionEmailPreferences
 * @property boolean $ShowGlobalShippingProgramListingPreference
 * @property boolean $ShowGlobalShippingProgramPreference
 * @property boolean $ShowOutOfStockControlPreference
 * @property boolean $ShowOverrideGSPServiceWithIntlServicePreference
 * @property boolean $ShowPickupDropoffPreferences
 * @property boolean $ShowProStoresPreferences
 * @property boolean $ShowPurchaseReminderEmailPreferences
 * @property boolean $ShowRequiredShipPhoneNumberPreference
 * @property boolean $ShowSellerExcludeShipToLocationPreference
 * @property boolean $ShowSellerFavoriteItemPreferences
 * @property boolean $ShowSellerPaymentPreferences
 * @property boolean $ShowSellerProfilePreferences
 * @property boolean $ShowSellerReturnPreferences
 * @property boolean $ShowUnpaidItemAssistanceExclusionList
 * @property boolean $ShowUnpaidItemAssistancePreference
 */
class GetUserPreferencesRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'ShowBidderNoticePreferences' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowBidderNoticePreferences'
        ),
        'ShowCombinedPaymentPreferences' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowCombinedPaymentPreferences'
        ),
        'ShowDispatchCutoffTimePreferences' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowDispatchCutoffTimePreferences'
        ),
        'ShowEmailShipmentTrackingNumberPreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowEmailShipmentTrackingNumberPreference'
        ),
        'ShowEndOfAuctionEmailPreferences' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowEndOfAuctionEmailPreferences'
        ),
        'ShowGlobalShippingProgramListingPreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowGlobalShippingProgramListingPreference'
        ),
        'ShowGlobalShippingProgramPreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowGlobalShippingProgramPreference'
        ),
        'ShowOutOfStockControlPreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowOutOfStockControlPreference'
        ),
        'ShowOverrideGSPServiceWithIntlServicePreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowOverrideGSPServiceWithIntlServicePreference'
        ),
        'ShowPickupDropoffPreferences' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowPickupDropoffPreferences'
        ),
        'ShowProStoresPreferences' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowProStoresPreferences'
        ),
        'ShowPurchaseReminderEmailPreferences' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowPurchaseReminderEmailPreferences'
        ),
        'ShowRequiredShipPhoneNumberPreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowRequiredShipPhoneNumberPreference'
        ),
        'ShowSellerExcludeShipToLocationPreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowSellerExcludeShipToLocationPreference'
        ),
        'ShowSellerFavoriteItemPreferences' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowSellerFavoriteItemPreferences'
        ),
        'ShowSellerPaymentPreferences' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowSellerPaymentPreferences'
        ),
        'ShowSellerProfilePreferences' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowSellerProfilePreferences'
        ),
        'ShowSellerReturnPreferences' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowSellerReturnPreferences'
        ),
        'ShowUnpaidItemAssistanceExclusionList' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowUnpaidItemAssistanceExclusionList'
        ),
        'ShowUnpaidItemAssistancePreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowUnpaidItemAssistancePreference'
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
            self::$requestXmlRootElementNames[__CLASS__] = 'GetUserPreferencesRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
