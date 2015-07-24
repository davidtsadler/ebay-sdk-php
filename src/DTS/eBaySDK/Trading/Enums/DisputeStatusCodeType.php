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
class DisputeStatusCodeType
{
    const C_CLAIM_APPROVED = 'ClaimApproved';
    const C_CLAIM_CLOSED = 'ClaimClosed';
    const C_CLAIM_DENIED = 'ClaimDenied';
    const C_CLAIM_IN_PROCESS = 'ClaimInProcess';
    const C_CLAIM_OPENED = 'ClaimOpened';
    const C_CLAIM_PAID = 'ClaimPaid';
    const C_CLAIM_RESOLVED = 'ClaimResolved';
    const C_CLAIM_SUBMITTED = 'ClaimSubmitted';
    const C_CLOSED = 'Closed';
    const C_CLOSEDFVF_CREDIT_NO_STRIKE = 'ClosedFVFCreditNoStrike';
    const C_CLOSEDFVF_CREDIT_STRIKE = 'ClosedFVFCreditStrike';
    const C_CLOSED_NOFVF_CREDIT_NO_STRIKE = 'ClosedNoFVFCreditNoStrike';
    const C_CLOSED_NOFVF_CREDIT_STRIKE = 'ClosedNoFVFCreditStrike';
    const C_CUSTOM_CODE = 'CustomCode';
    const C_FVF_CREDIT_REVERSED_AFTER_CLOSING = 'FVFCreditReversedAfterClosing';
    const C_NO_DOCUMENTATION = 'NoDocumentation';
    const C_STRIKE_APPEALED_AFTER_CLOSING = 'StrikeAppealedAfterClosing';
    const C_STRIKE_APPEALED_ANDFVF_CREDIT_REVERSED = 'StrikeAppealedAndFVFCreditReversed';
    const C_UNPAID_ITEM_OPENED = 'UnpaidItemOpened';
    const C_WAITING_FOR_BUYER_RESPONSE = 'WaitingForBuyerResponse';
    const C_WAITING_FOR_SELLER_RESPONSE = 'WaitingForSellerResponse';
}
