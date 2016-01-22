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

namespace DTS\eBaySDK\FileTransfer\Services;

class FileTransferService extends \DTS\eBaySDK\FileTransfer\Services\FileTransferBaseService
{
    const API_VERSION = '1.1.0';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    /**
     * @param \DTS\eBaySDK\FileTransfer\Types\UploadFileRequest $request
     * @return \DTS\eBaySDK\FileTransfer\Types\UploadFileResponse
     */
    public function uploadFile(\DTS\eBaySDK\FileTransfer\Types\UploadFileRequest $request)
    {
        return $this->callOperation(
            'uploadFile',
            $request,
            '\DTS\eBaySDK\FileTransfer\Types\UploadFileResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\FileTransfer\Types\DownloadFileRequest $request
     * @return \DTS\eBaySDK\FileTransfer\Types\DownloadFileResponse
     */
    public function downloadFile(\DTS\eBaySDK\FileTransfer\Types\DownloadFileRequest $request)
    {
        return $this->callOperation(
            'downloadFile',
            $request,
            '\DTS\eBaySDK\FileTransfer\Types\DownloadFileResponse'
        );
    }
}

