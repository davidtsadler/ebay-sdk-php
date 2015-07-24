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
class PaymentHoldStatusCodeType
{
    const C_CUSTOM_CODE = 'CustomCode';
    const C_MERCHANT_HOLD = 'MerchantHold';
    const C_NEW_SELLER_HOLD = 'NewSellerHold';
    const C_NONE = 'None';
    const C_PAYMENT_HOLD = 'PaymentHold';
    const C_PAYMENT_REVIEW = 'PaymentReview';
    const C_RELEASED = 'Released';
    const C_RELEASE_CONFIRMED = 'ReleaseConfirmed';
    const C_RELEASE_FAILED = 'ReleaseFailed';
    const C_RELEASE_PENDING = 'ReleasePending';
}
