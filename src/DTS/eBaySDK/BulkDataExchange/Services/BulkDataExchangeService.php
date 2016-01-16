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

namespace DTS\eBaySDK\BulkDataExchange\Services;

class BulkDataExchangeService extends \DTS\eBaySDK\BulkDataExchange\Services\BulkDataExchangeBaseService
{
    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    /**
     * @param \DTS\eBaySDK\BulkDataExchange\Types\CreateUploadJobRequest $request
     * @return \DTS\eBaySDK\BulkDataExchange\Types\CreateUploadJobResponse
     */
    public function createUploadJob(\DTS\eBaySDK\BulkDataExchange\Types\CreateUploadJobRequest $request)
    {
        return $this->callOperation(
            'createUploadJob',
            $request,
            '\DTS\eBaySDK\BulkDataExchange\Types\CreateUploadJobResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\BulkDataExchange\Types\StartUploadJobRequest $request
     * @return \DTS\eBaySDK\BulkDataExchange\Types\StartUploadJobResponse
     */
    public function startUploadJob(\DTS\eBaySDK\BulkDataExchange\Types\StartUploadJobRequest $request)
    {
        return $this->callOperation(
            'startUploadJob',
            $request,
            '\DTS\eBaySDK\BulkDataExchange\Types\StartUploadJobResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\BulkDataExchange\Types\AbortJobRequest $request
     * @return \DTS\eBaySDK\BulkDataExchange\Types\AbortJobResponse
     */
    public function abortJob(\DTS\eBaySDK\BulkDataExchange\Types\AbortJobRequest $request)
    {
        return $this->callOperation(
            'abortJob',
            $request,
            '\DTS\eBaySDK\BulkDataExchange\Types\AbortJobResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\BulkDataExchange\Types\GetJobsRequest $request
     * @return \DTS\eBaySDK\BulkDataExchange\Types\GetJobsResponse
     */
    public function getJobs(\DTS\eBaySDK\BulkDataExchange\Types\GetJobsRequest $request)
    {
        return $this->callOperation(
            'getJobs',
            $request,
            '\DTS\eBaySDK\BulkDataExchange\Types\GetJobsResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\BulkDataExchange\Types\GetJobStatusRequest $request
     * @return \DTS\eBaySDK\BulkDataExchange\Types\GetJobStatusResponse
     */
    public function getJobStatus(\DTS\eBaySDK\BulkDataExchange\Types\GetJobStatusRequest $request)
    {
        return $this->callOperation(
            'getJobStatus',
            $request,
            '\DTS\eBaySDK\BulkDataExchange\Types\GetJobStatusResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\BulkDataExchange\Types\StartDownloadJobRequest $request
     * @return \DTS\eBaySDK\BulkDataExchange\Types\StartDownloadJobResponse
     */
    public function startDownloadJob(\DTS\eBaySDK\BulkDataExchange\Types\StartDownloadJobRequest $request)
    {
        return $this->callOperation(
            'startDownloadJob',
            $request,
            '\DTS\eBaySDK\BulkDataExchange\Types\StartDownloadJobResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\BulkDataExchange\Types\CreateRecurringJobRequest $request
     * @return \DTS\eBaySDK\BulkDataExchange\Types\CreateRecurringJobResponse
     */
    public function createRecurringJob(\DTS\eBaySDK\BulkDataExchange\Types\CreateRecurringJobRequest $request)
    {
        return $this->callOperation(
            'createRecurringJob',
            $request,
            '\DTS\eBaySDK\BulkDataExchange\Types\CreateRecurringJobResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\BulkDataExchange\Types\DeleteRecurringJobRequest $request
     * @return \DTS\eBaySDK\BulkDataExchange\Types\DeleteRecurringJobResponse
     */
    public function deleteRecurringJob(\DTS\eBaySDK\BulkDataExchange\Types\DeleteRecurringJobRequest $request)
    {
        return $this->callOperation(
            'deleteRecurringJob',
            $request,
            '\DTS\eBaySDK\BulkDataExchange\Types\DeleteRecurringJobResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\BulkDataExchange\Types\GetRecurringJobsRequest $request
     * @return \DTS\eBaySDK\BulkDataExchange\Types\GetRecurringJobsResponse
     */
    public function getRecurringJobs(\DTS\eBaySDK\BulkDataExchange\Types\GetRecurringJobsRequest $request)
    {
        return $this->callOperation(
            'getRecurringJobs',
            $request,
            '\DTS\eBaySDK\BulkDataExchange\Types\GetRecurringJobsResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusRequest $request
     * @return \DTS\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusResponse
     */
    public function getRecurringJobExecutionStatus(\DTS\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusRequest $request)
    {
        return $this->callOperation(
            'getRecurringJobExecutionStatus',
            $request,
            '\DTS\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionHistoryRequest $request
     * @return \DTS\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionHistoryResponse
     */
    public function getRecurringJobExecutionHistory(\DTS\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionHistoryRequest $request)
    {
        return $this->callOperation(
            'getRecurringJobExecutionHistory',
            $request,
            '\DTS\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionHistoryResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\BulkDataExchange\Types\ActivateRecurringJobRequest $request
     * @return \DTS\eBaySDK\BulkDataExchange\Types\ActivateRecurringJobResponse
     */
    public function activateRecurringJob(\DTS\eBaySDK\BulkDataExchange\Types\ActivateRecurringJobRequest $request)
    {
        return $this->callOperation(
            'activateRecurringJob',
            $request,
            '\DTS\eBaySDK\BulkDataExchange\Types\ActivateRecurringJobResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\BulkDataExchange\Types\SuspendRecurringJobRequest $request
     * @return \DTS\eBaySDK\BulkDataExchange\Types\SuspendRecurringJobResponse
     */
    public function suspendRecurringJob(\DTS\eBaySDK\BulkDataExchange\Types\SuspendRecurringJobRequest $request)
    {
        return $this->callOperation(
            'suspendRecurringJob',
            $request,
            '\DTS\eBaySDK\BulkDataExchange\Types\SuspendRecurringJobResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\BulkDataExchange\Types\AbortRecurringJobExecutionRequest $request
     * @return \DTS\eBaySDK\BulkDataExchange\Types\AbortRecurringJobExecutionResponse
     */
    public function abortRecurringJobExecution(\DTS\eBaySDK\BulkDataExchange\Types\AbortRecurringJobExecutionRequest $request)
    {
        return $this->callOperation(
            'abortRecurringJobExecution',
            $request,
            '\DTS\eBaySDK\BulkDataExchange\Types\AbortRecurringJobExecutionResponse'
        );
    }
}

