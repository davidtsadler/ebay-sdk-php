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
class ReturnStatusType
{
    const C_CLOSED = 'CLOSED';
    const C_ESCALATED = 'ESCALATED';
    const C_ITEM_DELIVERED = 'ITEM_DELIVERED';
    const C_ITEM_SHIPPED = 'ITEM_SHIPPED';
    const C_READY_FOR_SHIPPING = 'READY_FOR_SHIPPING';
    const C_UNKNOWN = 'UNKNOWN';
    const C_WAITING_FOR_SELLER_INFO = 'WAITING_FOR_SELLER_INFO';
}
