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

namespace DTS\eBaySDK\ResolutionCaseManagement\Types;

/**
 *
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\AppealToCustomerSupportOptionType $appealToCustomerSupport
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\ContactCustomerSupportOptionType $contactCustomerSupport
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\EscalateToCustomerSupportOptionType $escalateToCustomerSupport
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\IssueFullRefundOptionType $issueFullRefund
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\IssuePartialRefundOptionType $issuePartialRefund
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\OfferOtherSolutionOptionType $offerOtherSolution
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\ProvideRefundInfoOptionType $provideRefundInfo
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\ProvideShippingInfoOptionType $provideShippingInfo
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\ProvideShippingOrTrackingInfoOptionType $provideShippingOrTrackingInfo
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\ProvideTrackingInfoOptionType $provideTrackingInfo
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\RequestBuyerToReturnOptionType $requestBuyerToReturn
 */
class ActivityOptionListType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'appealToCustomerSupport' => array(
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\AppealToCustomerSupportOptionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'appealToCustomerSupport'
        ),
        'contactCustomerSupport' => array(
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\ContactCustomerSupportOptionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'contactCustomerSupport'
        ),
        'escalateToCustomerSupport' => array(
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\EscalateToCustomerSupportOptionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'escalateToCustomerSupport'
        ),
        'issueFullRefund' => array(
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\IssueFullRefundOptionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'issueFullRefund'
        ),
        'issuePartialRefund' => array(
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\IssuePartialRefundOptionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'issuePartialRefund'
        ),
        'offerOtherSolution' => array(
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\OfferOtherSolutionOptionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'offerOtherSolution'
        ),
        'provideRefundInfo' => array(
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\ProvideRefundInfoOptionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'provideRefundInfo'
        ),
        'provideShippingInfo' => array(
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\ProvideShippingInfoOptionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'provideShippingInfo'
        ),
        'provideShippingOrTrackingInfo' => array(
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\ProvideShippingOrTrackingInfoOptionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'provideShippingOrTrackingInfo'
        ),
        'provideTrackingInfo' => array(
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\ProvideTrackingInfoOptionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'provideTrackingInfo'
        ),
        'requestBuyerToReturn' => array(
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\RequestBuyerToReturnOptionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'requestBuyerToReturn'
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
            self::$xmlNamespaces[__CLASS__] = 'http://www.ebay.com/marketplace/resolution/v1/services';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
