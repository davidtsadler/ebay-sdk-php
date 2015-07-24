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

namespace DTS\eBaySDK\Trading\Enums;

/**
 *
 */
class CancelReasonCodeType
{
    const C_BUYER_CANCEL_ORDER = 'BuyerCancelOrder';
    const C_BUYER_CANCEL_OR_ADDRESS_ISSUE = 'BuyerCancelOrAddressIssue';
    const C_BUYER_NOT_SCHEDULE = 'BuyerNotSchedule';
    const C_BUYER_NO_SHOW = 'BuyerNoShow';
    const C_BUYER_REFUSED = 'BuyerRefused';
    const C_CUSTOM_CODE = 'CustomCode';
    const C_FOUND_CHEAPER_PRICE = 'FoundCheaperPrice';
    const C_ORDER_PLACED_BY_MISTAKE = 'OrderPlacedByMistake';
    const C_OUT_OF_STOCK = 'OutOfStock';
    const C_OUT_OF_STOCK_OR_CANNOT_FULFILL = 'OutOfStockOrCannotFulfill';
    const C_PRICE_TOO_HIGH = 'PriceTooHigh';
    const C_VALET_DELIVERY_ISSUES = 'ValetDeliveryIssues';
    const C_VALET_UNAVAILABLE = 'ValetUnavailable';
    const C_WONT_ARRIVE_IN_TIME = 'WontArriveInTime';
}
