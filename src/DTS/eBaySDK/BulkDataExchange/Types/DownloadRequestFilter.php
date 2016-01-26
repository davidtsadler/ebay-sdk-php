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

namespace DTS\eBaySDK\BulkDataExchange\Types;

/**
 *
 * @property \DTS\eBaySDK\BulkDataExchange\Types\FeeSettlementReportFilter $feeSettlementReportFilter
 * @property \DTS\eBaySDK\BulkDataExchange\Types\SiteFilter $siteFilter
 * @property \DTS\eBaySDK\BulkDataExchange\Types\ActiveInventoryReportFilter $activeInventoryReportFilter
 * @property \DTS\eBaySDK\BulkDataExchange\Types\DateFilter $dateFilter
 * @property \DTS\eBaySDK\BulkDataExchange\Types\SoldReportFilter $soldReportFilter
 * @property \DTS\eBaySDK\BulkDataExchange\Types\OrderReportFilter $orderReportFilter
 */
class DownloadRequestFilter extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'feeSettlementReportFilter' => array(
            'type' => 'DTS\eBaySDK\BulkDataExchange\Types\FeeSettlementReportFilter',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'feeSettlementReportFilter'
        ),
        'siteFilter' => array(
            'type' => 'DTS\eBaySDK\BulkDataExchange\Types\SiteFilter',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'siteFilter'
        ),
        'activeInventoryReportFilter' => array(
            'type' => 'DTS\eBaySDK\BulkDataExchange\Types\ActiveInventoryReportFilter',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'activeInventoryReportFilter'
        ),
        'dateFilter' => array(
            'type' => 'DTS\eBaySDK\BulkDataExchange\Types\DateFilter',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'dateFilter'
        ),
        'soldReportFilter' => array(
            'type' => 'DTS\eBaySDK\BulkDataExchange\Types\SoldReportFilter',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'soldReportFilter'
        ),
        'orderReportFilter' => array(
            'type' => 'DTS\eBaySDK\BulkDataExchange\Types\OrderReportFilter',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'orderReportFilter'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
