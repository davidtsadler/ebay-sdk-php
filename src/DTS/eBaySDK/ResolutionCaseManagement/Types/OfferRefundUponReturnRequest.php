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
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\CaseIdType $caseId
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\Address $returnAddress
 * @property string $returnMerchandiseAuthorization
 * @property string $additionalReturnInstructions
 */
class OfferRefundUponReturnRequest extends \DTS\eBaySDK\ResolutionCaseManagement\Types\BaseRequest
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'caseId' => array(
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\CaseIdType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'caseId'
        ),
        'returnAddress' => array(
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\Address',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'returnAddress'
        ),
        'returnMerchandiseAuthorization' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'returnMerchandiseAuthorization'
        ),
        'additionalReturnInstructions' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'additionalReturnInstructions'
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'offerRefundUponReturnRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
