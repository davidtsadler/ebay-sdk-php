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
 * @property integer $DeclinedRTERequestCount
 * @property integer $DocsForCCProcessingToSendCount
 * @property integer $FeedbackToReceiveCount
 * @property integer $FeedbackToSendCount
 * @property integer $ItemReceiptConfirmationToReceiveCount
 * @property integer $ItemReceiptToConfirmCount
 * @property integer $OutbidCount
 * @property integer $PaymentToReceiveCount
 * @property integer $PaymentToSendCount
 * @property integer $PendingRTERequestCount
 * @property integer $RTEToProcessCount
 * @property integer $RefundCancelledCount
 * @property integer $RefundInitiatedCount
 * @property integer $RefundOnHoldCount
 * @property integer $RelistingNeededCount
 * @property integer $SecondChanceOfferCount
 * @property integer $ShippingDetailsToBeProvidedCount
 * @property integer $ShippingNeededCount
 * @property integer $TotalNewLeadsCount
 */
class RemindersType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'DeclinedRTERequestCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DeclinedRTERequestCount'
        ),
        'DocsForCCProcessingToSendCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DocsForCCProcessingToSendCount'
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
        'ItemReceiptConfirmationToReceiveCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemReceiptConfirmationToReceiveCount'
        ),
        'ItemReceiptToConfirmCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemReceiptToConfirmCount'
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
        'PaymentToSendCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentToSendCount'
        ),
        'PendingRTERequestCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PendingRTERequestCount'
        ),
        'RTEToProcessCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RTEToProcessCount'
        ),
        'RefundCancelledCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundCancelledCount'
        ),
        'RefundInitiatedCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundInitiatedCount'
        ),
        'RefundOnHoldCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundOnHoldCount'
        ),
        'RelistingNeededCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RelistingNeededCount'
        ),
        'SecondChanceOfferCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SecondChanceOfferCount'
        ),
        'ShippingDetailsToBeProvidedCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingDetailsToBeProvidedCount'
        ),
        'ShippingNeededCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingNeededCount'
        ),
        'TotalNewLeadsCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TotalNewLeadsCount'
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

        $this->setValues(__CLASS__, $childValues);
    }
}
