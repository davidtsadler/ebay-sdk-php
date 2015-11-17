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

namespace DTS\eBaySDK\MerchantData\Types;

/**
 *
 * @property \DTS\eBaySDK\MerchantData\Types\AddressType $Address
 * @property string $Fax
 * @property string $Email
 * @property string $AdditionalContactInformation
 * @property string $TradeRegistrationNumber
 * @property boolean $LegalInvoice
 * @property string $TermsAndConditions
 * @property \DTS\eBaySDK\MerchantData\Types\VATDetailsType $VATDetails
 */
class BusinessSellerDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'Address' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AddressType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Address'
        ),
        'Fax' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Fax'
        ),
        'Email' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Email'
        ),
        'AdditionalContactInformation' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AdditionalContactInformation'
        ),
        'TradeRegistrationNumber' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TradeRegistrationNumber'
        ),
        'LegalInvoice' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LegalInvoice'
        ),
        'TermsAndConditions' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TermsAndConditions'
        ),
        'VATDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\VATDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VATDetails'
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
