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
 * @property \DTS\eBaySDK\Trading\Enums\CheckoutStatusCodeType $CheckoutStatus
 * @property \DTS\eBaySDK\Trading\Enums\SellingManagerPaidStatusCodeType $PaidStatus
 * @property \DTS\eBaySDK\Trading\Enums\SellingManagerShippedStatusCodeType $ShippedStatus
 * @property \DTS\eBaySDK\Trading\Enums\PaymentStatusCodeType $eBayPaymentStatus
 * @property string $PayPalTransactionID
 * @property \DTS\eBaySDK\Trading\Enums\BuyerPaymentMethodCodeType $PaymentMethodUsed
 * @property \DTS\eBaySDK\Trading\Enums\CommentTypeCodeType $FeedbackReceived
 * @property boolean $FeedbackSent
 * @property integer $TotalEmailsSent
 * @property \DTS\eBaySDK\Trading\Enums\PaymentHoldStatusCodeType $PaymentHoldStatus
 * @property string $SellerInvoiceNumber
 * @property \DateTime $ShippedTime
 * @property \DateTime $PaidTime
 * @property \DateTime $LastEmailSentTime
 * @property \DateTime $SellerInvoiceTime
 * @property boolean $IntegratedMerchantCreditCardEnabled
 */
class SellingManagerOrderStatusType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'CheckoutStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CheckoutStatus'
        ),
        'PaidStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaidStatus'
        ),
        'ShippedStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippedStatus'
        ),
        'eBayPaymentStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayPaymentStatus'
        ),
        'PayPalTransactionID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalTransactionID'
        ),
        'PaymentMethodUsed' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentMethodUsed'
        ),
        'FeedbackReceived' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackReceived'
        ),
        'FeedbackSent' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackSent'
        ),
        'TotalEmailsSent' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TotalEmailsSent'
        ),
        'PaymentHoldStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentHoldStatus'
        ),
        'SellerInvoiceNumber' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerInvoiceNumber'
        ),
        'ShippedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippedTime'
        ),
        'PaidTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaidTime'
        ),
        'LastEmailSentTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LastEmailSentTime'
        ),
        'SellerInvoiceTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerInvoiceTime'
        ),
        'IntegratedMerchantCreditCardEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IntegratedMerchantCreditCardEnabled'
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
