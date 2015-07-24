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
class InquiryStatusCodeType
{
    const C_CUSTOM_CODE = 'CustomCode';
    const C_INVALID = 'Invalid';
    const C_NOT_APPLICABLE = 'NotApplicable';
    const C_TRACK_INQUIRY_CLOSED_NO_REFUND = 'TrackInquiryClosedNoRefund';
    const C_TRACK_INQUIRY_CLOSED_WITH_REFUND = 'TrackInquiryClosedWithRefund';
    const C_TRACK_INQUIRY_ESCALATED_CLOSED_NO_REFUND = 'TrackInquiryEscalatedClosedNoRefund';
    const C_TRACK_INQUIRY_ESCALATED_CLOSED_WITH_REFUND = 'TrackInquiryEscalatedClosedWithRefund';
    const C_TRACK_INQUIRY_ESCALATED_PENDINGCS = 'TrackInquiryEscalatedPendingCS';
    const C_TRACK_INQUIRY_ESCALATED_PENDING_BUYER = 'TrackInquiryEscalatedPendingBuyer';
    const C_TRACK_INQUIRY_ESCALATED_PENDING_SELLER = 'TrackInquiryEscalatedPendingSeller';
    const C_TRACK_INQUIRY_PENDING_BUYER_RESPONSE = 'TrackInquiryPendingBuyerResponse';
    const C_TRACK_INQUIRY_PENDING_SELLER_RESPONSE = 'TrackInquiryPendingSellerResponse';
}
