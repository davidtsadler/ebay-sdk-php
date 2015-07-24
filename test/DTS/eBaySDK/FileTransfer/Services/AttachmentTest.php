<?php

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
