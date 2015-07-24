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
 * @property \DTS\eBaySDK\Trading\Types\BuyerSatisfactionDashboardType $BuyerSatisfaction
 * @property \DTS\eBaySDK\Trading\Types\PerformanceDashboardType[] $Performance
 * @property \DTS\eBaySDK\Trading\Types\PowerSellerDashboardType $PowerSellerStatus
 * @property \DTS\eBaySDK\Trading\Types\SearchStandingDashboardType $SearchStanding
 * @property \DTS\eBaySDK\Trading\Types\SellerAccountDashboardType $SellerAccount
 * @property \DTS\eBaySDK\Trading\Types\SellerFeeDiscountDashboardType $SellerFeeDiscount
 */
class GetSellerDashboardResponseType extends \DTS\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'BuyerSatisfaction' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BuyerSatisfactionDashboardType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerSatisfaction'
        ),
        'Performance' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PerformanceDashboardType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'Performance'
        ),
        'PowerSellerStatus' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PowerSellerDashboardType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PowerSellerStatus'
        ),
        'SearchStanding' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SearchStandingDashboardType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SearchStanding'
        ),
        'SellerAccount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellerAccountDashboardType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerAccount'
        ),
        'SellerFeeDiscount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellerFeeDiscountDashboardType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerFeeDiscount'
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
