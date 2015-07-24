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
class CancelStatusCodeType
{
    const C_CANCEL_CLOSED_FOR_COMMITMENT = 'CancelClosedForCommitment';
    const C_CANCEL_CLOSED_NO_REFUND = 'CancelClosedNoRefund';
    const C_CANCEL_CLOSED_UNKNOWN_REFUND = 'CancelClosedUnknownRefund';
    const C_CANCEL_CLOSED_WITH_REFUND = 'CancelClosedWithRefund';
    const C_CANCEL_COMPLETE = 'CancelComplete';
    const C_CANCEL_FAILED = 'CancelFailed';
    const C_CANCEL_PENDING = 'CancelPending';
    const C_CANCEL_REJECTED = 'CancelRejected';
    const C_CANCEL_REQUESTED = 'CancelRequested';
    const C_CUSTOM_CODE = 'CustomCode';
    const C_INVALID = 'Invalid';
    const C_NOT_APPLICABLE = 'NotApplicable';
}
