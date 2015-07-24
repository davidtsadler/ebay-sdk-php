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

namespace DTS\eBaySDK\FileTransfer\Services\Test;

use DTS\eBaySDK\FileTransfer\Services\FileTransferService;
use DTS\eBaySDK\FileTransfer\Types;
use DTS\eBaySDK\Mocks\HttpClient;

class AttachmentTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->service = new FileTransferService(array(), new HttpClient());
    }

    public function testAttachmentFieldIsSetCorrectlyInRequest()
    {
        // Calling the operation will not set the attachment field if there is no attachment.
        $request = new Types\UploadFileRequest();
        $this->assertEquals(null, $request->fileAttachment);
        $this->service->uploadFile($request);
        $this->assertEquals(null, $request->fileAttachment);

        // Calling the operation results in the attachment field been set by the service if there is an attachment.
        $request = new Types\UploadFileRequest();
        $request->attachment('123ABC');
        $this->assertEquals(null, $request->fileAttachment);
        $this->service->uploadFile($request);
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Types\FileAttachment', $request->fileAttachment);
        $this->assertEquals('<xop:Include xmlns:xop="http://www.w3.org/2004/08/xop/include" href="cid:attachment.bin@devbay.net"/>', $request->fileAttachment->Data);
        $this->assertEquals(6, $request->fileAttachment->Size);

        // Calling the operation results in the attachment field been set by the service if there is an attachment.
        $request = new Types\UploadFileRequest();
        $request->attachment('123ABC');
        $request->fileAttachment = new Types\FileAttachment();
        $this->assertEquals(null, $request->fileAttachment->Data);
        $this->assertEquals(null, $request->fileAttachment->Size);
        $this->service->uploadFile($request);
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Types\FileAttachment', $request->fileAttachment);
        $this->assertEquals('<xop:Include xmlns:xop="http://www.w3.org/2004/08/xop/include" href="cid:attachment.bin@devbay.net"/>', $request->fileAttachment->Data);
        $this->assertEquals(6, $request->fileAttachment->Size);

        // Calling the operation shouldn't modify an existing file attachment.
        $request = new Types\UploadFileRequest();
        $request->attachment('123ABC');
        $request->fileAttachment = new Types\FileAttachment();
        $request->fileAttachment->Data = 'ABCD1234';
        $request->fileAttachment->Size = 8;
        $this->service->uploadFile($request);
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Types\FileAttachment', $request->fileAttachment);
        $this->assertEquals('ABCD1234', $request->fileAttachment->Data);
        $this->assertEquals(8, $request->fileAttachment->Size);
    }
}
