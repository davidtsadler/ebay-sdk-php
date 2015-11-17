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
 * @property boolean $ShowSellerPaymentPreferences
 * @property boolean $ShowEndOfAuctionEmailPreferences
 * @property boolean $ShowSellerFavoriteItemPreferences
 * @property boolean $ShowEmailShipmentTrackingNumberPreference
 * @property boolean $ShowRequiredShipPhoneNumberPreference
 * @property boolean $ShowSellerExcludeShipToLocationPreference
 * @property boolean $ShowUnpaidItemAssistancePreference
 * @property boolean $ShowPurchaseReminderEmailPreferences
 * @property boolean $ShowUnpaidItemAssistanceExclusionList
 * @property boolean $ShowSellerProfilePreferences
 * @property boolean $ShowSellerReturnPreferences
 * @property boolean $ShowGlobalShippingProgramPreference
 * @property boolean $ShowDispatchCutoffTimePreferences
 * @property boolean $ShowGlobalShippingProgramListingPreference
 * @property boolean $ShowOverrideGSPServiceWithIntlServicePreference
 * @property boolean $ShowPickupDropoffPreferences
 * @property boolean $ShowOutOfStockControlPreference
 * @property boolean $ShoweBayPLUSPreference
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
        'ShowSellerPaymentPreferences' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowSellerPaymentPreferences'
        ),
        'ShowEndOfAuctionEmailPreferences' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowEndOfAuctionEmailPreferences'
        ),
        'ShowSellerFavoriteItemPreferences' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowSellerFavoriteItemPreferences'
        ),
        'ShowEmailShipmentTrackingNumberPreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowEmailShipmentTrackingNumberPreference'
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
        'ShowUnpaidItemAssistancePreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowUnpaidItemAssistancePreference'
        ),
        'ShowPurchaseReminderEmailPreferences' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowPurchaseReminderEmailPreferences'
        ),
        'ShowUnpaidItemAssistanceExclusionList' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowUnpaidItemAssistanceExclusionList'
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
        'ShowGlobalShippingProgramPreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowGlobalShippingProgramPreference'
        ),
        'ShowDispatchCutoffTimePreferences' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowDispatchCutoffTimePreferences'
        ),
        'ShowGlobalShippingProgramListingPreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowGlobalShippingProgramListingPreference'
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
        'ShowOutOfStockControlPreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShowOutOfStockControlPreference'
        ),
        'ShoweBayPLUSPreference' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShoweBayPLUSPreference'
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
