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
 * @property \DTS\eBaySDK\Trading\Types\AddressAttributeType[] $AddressAttribute
 * @property string $AddressID
 * @property \DTS\eBaySDK\Trading\Enums\AddressOwnerCodeType $AddressOwner
 * @property \DTS\eBaySDK\Trading\Enums\AddressRecordTypeCodeType $AddressRecordType
 * @property \DTS\eBaySDK\Trading\Enums\AddressStatusCodeType $AddressStatus
 * @property \DTS\eBaySDK\Trading\Enums\AddressUsageCodeType $AddressUsage
 * @property string $CityName
 * @property string $CompanyName
 * @property \DTS\eBaySDK\Trading\Enums\CountryCodeType $Country
 * @property string $CountryName
 * @property string $County
 * @property string $ExternalAddressID
 * @property string $FirstName
 * @property string $InternationalName
 * @property string $InternationalStateAndCity
 * @property string $InternationalStreet
 * @property string $LastName
 * @property string $Name
 * @property string $Phone
 * @property string $Phone2
 * @property string $Phone2AreaOrCityCode
 * @property \DTS\eBaySDK\Trading\Enums\CountryCodeType $Phone2CountryCode
 * @property string $Phone2CountryPrefix
 * @property string $Phone2LocalNumber
 * @property string $PhoneAreaOrCityCode
 * @property \DTS\eBaySDK\Trading\Enums\CountryCodeType $PhoneCountryCode
 * @property string $PhoneCountryPrefix
 * @property string $PhoneLocalNumber
 * @property string $PostalCode
 * @property string $ReferenceID
 * @property string $StateOrProvince
 * @property string $Street
 * @property string $Street1
 * @property string $Street2
 */
class AddressType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'AddressAttribute' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AddressAttributeType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'AddressAttribute'
        ),
        'AddressID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AddressID'
        ),
        'AddressOwner' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AddressOwner'
        ),
        'AddressRecordType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AddressRecordType'
        ),
        'AddressStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AddressStatus'
        ),
        'AddressUsage' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AddressUsage'
        ),
        'CityName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CityName'
        ),
        'CompanyName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CompanyName'
        ),
        'Country' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Country'
        ),
        'CountryName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CountryName'
        ),
        'County' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'County'
        ),
        'ExternalAddressID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExternalAddressID'
        ),
        'FirstName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FirstName'
        ),
        'InternationalName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InternationalName'
        ),
        'InternationalStateAndCity' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InternationalStateAndCity'
        ),
        'InternationalStreet' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InternationalStreet'
        ),
        'LastName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LastName'
        ),
        'Name' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Name'
        ),
        'Phone' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Phone'
        ),
        'Phone2' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Phone2'
        ),
        'Phone2AreaOrCityCode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Phone2AreaOrCityCode'
        ),
        'Phone2CountryCode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Phone2CountryCode'
        ),
        'Phone2CountryPrefix' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Phone2CountryPrefix'
        ),
        'Phone2LocalNumber' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Phone2LocalNumber'
        ),
        'PhoneAreaOrCityCode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PhoneAreaOrCityCode'
        ),
        'PhoneCountryCode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PhoneCountryCode'
        ),
        'PhoneCountryPrefix' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PhoneCountryPrefix'
        ),
        'PhoneLocalNumber' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PhoneLocalNumber'
        ),
        'PostalCode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PostalCode'
        ),
        'ReferenceID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReferenceID'
        ),
        'StateOrProvince' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StateOrProvince'
        ),
        'Street' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Street'
        ),
        'Street1' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Street1'
        ),
        'Street2' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Street2'
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
