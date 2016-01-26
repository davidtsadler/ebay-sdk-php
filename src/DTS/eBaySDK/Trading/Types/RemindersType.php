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
 * @property integer $PaymentToSendCount
 * @property integer $FeedbackToReceiveCount
 * @property integer $FeedbackToSendCount
 * @property integer $OutbidCount
 * @property integer $PaymentToReceiveCount
 * @property integer $SecondChanceOfferCount
 * @property integer $ShippingNeededCount
 * @property integer $RelistingNeededCount
 * @property integer $TotalNewLeadsCount
 * @property integer $DocsForCCProcessingToSendCount
 * @property integer $RTEToProcessCount
 * @property integer $ItemReceiptToConfirmCount
 * @property integer $RefundOnHoldCount
 * @property integer $RefundCancelledCount
 * @property integer $ShippingDetailsToBeProvidedCount
 * @property integer $ItemReceiptConfirmationToReceiveCount
 * @property integer $RefundInitiatedCount
 * @property integer $PendingRTERequestCount
 * @property integer $DeclinedRTERequestCount
 */
class RemindersType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'PaymentToSendCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentToSendCount'
        ),
        'FeedbackToReceiveCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackToReceiveCount'
        ),
        'FeedbackToSendCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackToSendCount'
        ),
        'OutbidCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OutbidCount'
        ),
        'PaymentToReceiveCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentToReceiveCount'
        ),
        'SecondChanceOfferCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SecondChanceOfferCount'
        ),
        'ShippingNeededCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingNeededCount'
        ),
        'RelistingNeededCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RelistingNeededCount'
        ),
        'TotalNewLeadsCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TotalNewLeadsCount'
        ),
        'DocsForCCProcessingToSendCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DocsForCCProcessingToSendCount'
        ),
        'RTEToProcessCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RTEToProcessCount'
        ),
        'ItemReceiptToConfirmCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemReceiptToConfirmCount'
        ),
        'RefundOnHoldCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundOnHoldCount'
        ),
        'RefundCancelledCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundCancelledCount'
        ),
        'ShippingDetailsToBeProvidedCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingDetailsToBeProvidedCount'
        ),
        'ItemReceiptConfirmationToReceiveCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemReceiptConfirmationToReceiveCount'
        ),
        'RefundInitiatedCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundInitiatedCount'
        ),
        'PendingRTERequestCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PendingRTERequestCount'
        ),
        'DeclinedRTERequestCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DeclinedRTERequestCount'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
