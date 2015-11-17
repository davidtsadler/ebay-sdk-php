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

namespace DTS\eBaySDK\ReturnManagement\Enums;

/**
 *
 */
class NotificationEventNameType
{
    const C_RETURN_CLOSED = 'ReturnClosed';
    const C_RETURN_CREATED = 'ReturnCreated';
    const C_RETURN_DELIVERED = 'ReturnDelivered';
    const C_RETURN_ESCALATED = 'ReturnEscalated';
    const C_RETURN_REFUND_OVERDUE = 'ReturnRefundOverdue';
    const C_RETURN_SELLER_INFO_OVERDUE = 'ReturnSellerInfoOverdue';
    const C_RETURN_SHIPPED = 'ReturnShipped';
    const C_RETURN_WAITING_FOR_SELLER_INFO = 'ReturnWaitingForSellerInfo';
}
