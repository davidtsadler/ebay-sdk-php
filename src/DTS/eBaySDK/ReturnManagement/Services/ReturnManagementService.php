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

namespace DTS\eBaySDK\ReturnManagement\Services;

class ReturnManagementService extends \DTS\eBaySDK\ReturnManagement\Services\ReturnManagementBaseService
{
    /**
     * @param array $config Optional configuration option values.
     * @param \DTS\eBaySDK\Interfaces\HttpClientInterface $httpClient The object that will handle sending requests to the API.
     */
    public function __construct($config = array(), \DTS\eBaySDK\Interfaces\HttpClientInterface $httpClient = null)
    {
        parent::__construct($config, $httpClient);
    }

    /**
     * @param \DTS\eBaySDK\ReturnManagement\Types\GetVersionRequest $request
     * @return \DTS\eBaySDK\ReturnManagement\Types\GetVersionResponse
     */
    public function getVersion(\DTS\eBaySDK\ReturnManagement\Types\GetVersionRequest $request)
    {
        return $this->callOperation(
            'getVersion',
            $request,
            '\DTS\eBaySDK\ReturnManagement\Types\GetVersionResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\ReturnManagement\Types\GetUserReturnsRequest $request
     * @return \DTS\eBaySDK\ReturnManagement\Types\GetUserReturnsResponse
     */
    public function getUserReturns(\DTS\eBaySDK\ReturnManagement\Types\GetUserReturnsRequest $request)
    {
        return $this->callOperation(
            'getUserReturns',
            $request,
            '\DTS\eBaySDK\ReturnManagement\Types\GetUserReturnsResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\ReturnManagement\Types\GetReturnDetailRequest $request
     * @return \DTS\eBaySDK\ReturnManagement\Types\GetReturnDetailResponse
     */
    public function getReturnDetail(\DTS\eBaySDK\ReturnManagement\Types\GetReturnDetailRequest $request)
    {
        return $this->callOperation(
            'getReturnDetail',
            $request,
            '\DTS\eBaySDK\ReturnManagement\Types\GetReturnDetailResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\ReturnManagement\Types\GetActivityOptionsRequest $request
     * @return \DTS\eBaySDK\ReturnManagement\Types\GetActivityOptionsResponse
     */
    public function getActivityOptions(\DTS\eBaySDK\ReturnManagement\Types\GetActivityOptionsRequest $request)
    {
        return $this->callOperation(
            'getActivityOptions',
            $request,
            '\DTS\eBaySDK\ReturnManagement\Types\GetActivityOptionsResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\ReturnManagement\Types\IssueRefundRequest $request
     * @return \DTS\eBaySDK\ReturnManagement\Types\IssueRefundResponse
     */
    public function issueRefund(\DTS\eBaySDK\ReturnManagement\Types\IssueRefundRequest $request)
    {
        return $this->callOperation(
            'issueRefund',
            $request,
            '\DTS\eBaySDK\ReturnManagement\Types\IssueRefundResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\ReturnManagement\Types\ProvideSellerInfoRequest $request
     * @return \DTS\eBaySDK\ReturnManagement\Types\ProvideSellerInfoResponse
     */
    public function provideSellerInfo(\DTS\eBaySDK\ReturnManagement\Types\ProvideSellerInfoRequest $request)
    {
        return $this->callOperation(
            'provideSellerInfo',
            $request,
            '\DTS\eBaySDK\ReturnManagement\Types\ProvideSellerInfoResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\ReturnManagement\Types\GetReturnMetadataRequest $request
     * @return \DTS\eBaySDK\ReturnManagement\Types\GetReturnMetadataResponse
     */
    public function getReturnMetadata(\DTS\eBaySDK\ReturnManagement\Types\GetReturnMetadataRequest $request)
    {
        return $this->callOperation(
            'getReturnMetadata',
            $request,
            '\DTS\eBaySDK\ReturnManagement\Types\GetReturnMetadataResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\ReturnManagement\Types\ProvideTrackingInfoRequest $request
     * @return \DTS\eBaySDK\ReturnManagement\Types\ProvideTrackingInfoResponse
     */
    public function provideTrackingInfo(\DTS\eBaySDK\ReturnManagement\Types\ProvideTrackingInfoRequest $request)
    {
        return $this->callOperation(
            'provideTrackingInfo',
            $request,
            '\DTS\eBaySDK\ReturnManagement\Types\ProvideTrackingInfoResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\ReturnManagement\Types\SetItemAsReceivedRequest $request
     * @return \DTS\eBaySDK\ReturnManagement\Types\SetItemAsReceivedResponse
     */
    public function setItemAsReceived(\DTS\eBaySDK\ReturnManagement\Types\SetItemAsReceivedRequest $request)
    {
        return $this->callOperation(
            'setItemAsReceived',
            $request,
            '\DTS\eBaySDK\ReturnManagement\Types\SetItemAsReceivedResponse'
        );
    }
}
