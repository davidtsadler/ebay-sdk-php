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

namespace DTS\eBaySDK\MerchantData\Enums;

/**
 *
 */
class PaidStatusCodeType
{
    const C_BUYER_HAS_NOT_COMPLETED_CHECKOUT = 'BuyerHasNotCompletedCheckout';
    const C_CUSTOM_CODE = 'CustomCode';
    const C_ESCROW_PAYMENT_CANCELLED = 'EscrowPaymentCancelled';
    const C_MARKED_AS_PAID = 'MarkedAsPaid';
    const C_NOT_PAID = 'NotPaid';
    const C_PAID = 'Paid';
    const C_PAIDCOD = 'PaidCOD';
    const C_PAID_WITH_ESCROW = 'PaidWithEscrow';
    const C_PAID_WITH_PAISA_PAY = 'PaidWithPaisaPay';
    const C_PAID_WITH_PAISA_PAY_ESCROW = 'PaidWithPaisaPayEscrow';
    const C_PAID_WITH_PAY_PAL = 'PaidWithPayPal';
    const C_PAISA_PAY_NOT_PAID = 'PaisaPayNotPaid';
    const C_PAYMENT_PENDING = 'PaymentPending';
    const C_PAYMENT_PENDING_WITH_ESCROW = 'PaymentPendingWithEscrow';
    const C_PAYMENT_PENDING_WITH_PAISA_PAY = 'PaymentPendingWithPaisaPay';
    const C_PAYMENT_PENDING_WITH_PAISA_PAY_ESCROW = 'PaymentPendingWithPaisaPayEscrow';
    const C_PAYMENT_PENDING_WITH_PAY_PAL = 'PaymentPendingWithPayPal';
    const C_PAY_UPON_INVOICE = 'PayUponInvoice';
    const C_REFUNDED = 'Refunded';
    const C_WAITING_FORCOD_PAYMENT = 'WaitingForCODPayment';
}
