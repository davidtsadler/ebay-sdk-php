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
 * @property \DTS\eBaySDK\Trading\Types\ListingAnalyzerRecommendationsType $ListingAnalyzerRecommendations
 * @property \DTS\eBaySDK\Trading\Types\SIFFTASRecommendationsType $SIFFTASRecommendations
 * @property \DTS\eBaySDK\Trading\Types\PricingRecommendationsType $PricingRecommendations
 * @property \DTS\eBaySDK\Trading\Types\AttributeRecommendationsType $AttributeRecommendations
 * @property \DTS\eBaySDK\Trading\Types\ProductRecommendationsType $ProductRecommendations
 * @property string $CorrelationID
 * @property \DTS\eBaySDK\Trading\Types\RecommendationsType $Recommendations
 * @property \DTS\eBaySDK\Trading\Types\ProductListingDetailsType $ProductListingDetails
 * @property string $Title
 */
class GetRecommendationsResponseContainerType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'ListingAnalyzerRecommendations' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ListingAnalyzerRecommendationsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingAnalyzerRecommendations'
        ),
        'SIFFTASRecommendations' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SIFFTASRecommendationsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SIFFTASRecommendations'
        ),
        'PricingRecommendations' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PricingRecommendationsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PricingRecommendations'
        ),
        'AttributeRecommendations' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AttributeRecommendationsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AttributeRecommendations'
        ),
        'ProductRecommendations' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ProductRecommendationsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductRecommendations'
        ),
        'CorrelationID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CorrelationID'
        ),
        'Recommendations' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\RecommendationsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Recommendations'
        ),
        'ProductListingDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ProductListingDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductListingDetails'
        ),
        'Title' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Title'
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
