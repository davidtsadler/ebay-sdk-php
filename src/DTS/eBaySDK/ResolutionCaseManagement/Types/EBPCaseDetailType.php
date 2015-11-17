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
 * @property string $openReason
 * @property string $decisionReason
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\DecisionReasonDetailType $decisionReasonDetail
 * @property \DateTime $decisionDate
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Enums\CaseDecisionType $decision
 * @property boolean $FVFCredited
 * @property boolean $notCountedInBuyerProtectionCases
 * @property string $globalId
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\AppealType[] $appeal
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\EBPCaseResponseHistoryType[] $responseHistory
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\Amount $agreedRefundAmount
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\PaymentDetailType $paymentDetail
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\ShipmentType $buyerReturnShipment
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\ShipmentType $sellerShipment
 * @property string $detailStatus
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\DetailStatusInfoType $detailStatusInfo
 * @property string $initialBuyerExpectation
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\InitialBuyerExpectationDetailType $initialBuyerExpectationDetail
 * @property string $returnMerchandiseAuthorization
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\EBPCaseDocumentInfoType[] $caseDocumentInfo
 */
class EBPCaseDetailType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'openReason' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'openReason'
        ),
        'decisionReason' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'decisionReason'
        ),
        'decisionReasonDetail' => array(
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\DecisionReasonDetailType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'decisionReasonDetail'
        ),
        'decisionDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'decisionDate'
        ),
        'decision' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'decision'
        ),
        'FVFCredited' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FVFCredited'
        ),
        'notCountedInBuyerProtectionCases' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'notCountedInBuyerProtectionCases'
        ),
        'globalId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'globalId'
        ),
        'appeal' => array(
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\AppealType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'appeal'
        ),
        'responseHistory' => array(
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\EBPCaseResponseHistoryType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'responseHistory'
        ),
        'agreedRefundAmount' => array(
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\Amount',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'agreedRefundAmount'
        ),
        'paymentDetail' => array(
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\PaymentDetailType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'paymentDetail'
        ),
        'buyerReturnShipment' => array(
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\ShipmentType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'buyerReturnShipment'
        ),
        'sellerShipment' => array(
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\ShipmentType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'sellerShipment'
        ),
        'detailStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'detailStatus'
        ),
        'detailStatusInfo' => array(
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\DetailStatusInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'detailStatusInfo'
        ),
        'initialBuyerExpectation' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'initialBuyerExpectation'
        ),
        'initialBuyerExpectationDetail' => array(
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\InitialBuyerExpectationDetailType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'initialBuyerExpectationDetail'
        ),
        'returnMerchandiseAuthorization' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'returnMerchandiseAuthorization'
        ),
        'caseDocumentInfo' => array(
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\EBPCaseDocumentInfoType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'caseDocumentInfo'
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
