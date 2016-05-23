<?php
namespace DTS\eBaySDK\Test\FileTransfer\Services;

use DTS\eBaySDK\FileTransfer\Services\FileTransferService;
use DTS\eBaySDK\FileTransfer\Types;
use DTS\eBaySDK\Test\Mocks\HttpHandler;

class AttachmentTest extends \PHPUnit_Framework_TestCase
{
    public function testAttachmentFieldIsSetCorrectlyInRequest()
    {
        $h = new HttpHandler();

        $s = new FileTransferService([
            'authToken' => '321',
            'credentials' => ['appId' => '', 'certId' => '', 'devId' => ''],
            'httpHandler' => $h
        ]);

        // Calling the operation will not set the attachment field if there is no attachment.
        $r = new Types\UploadFileRequest();
        $this->assertEquals(null, $r->fileAttachment);
        $s->uploadFile($r);
        $this->assertEquals(null, $r->fileAttachment);

        // Calling the operation results in the attachment field been set by the service if there is an attachment.
        $r = new Types\UploadFileRequest();
        $r->attachment('123ABC');
        $this->assertEquals(null, $r->fileAttachment);
        $s->uploadFile($r);
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Types\FileAttachment', $r->fileAttachment);
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Types\Data', $r->fileAttachment->Data);
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Types\XopInclude', $r->fileAttachment->Data->xopInclude);
        $this->assertEquals('cid:attachment.bin@devbay.net', $r->fileAttachment->Data->xopInclude->href);
        $this->assertEquals(6, $r->fileAttachment->Size);

        // Calling the operation results in the attachment field been set by the service if there is an attachment.
        $r = new Types\UploadFileRequest();
        $r->attachment('123ABC');
        $r->fileAttachment = new Types\FileAttachment();
        $this->assertEquals(null, $r->fileAttachment->Data);
        $this->assertEquals(null, $r->fileAttachment->Size);
        $s->uploadFile($r);
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Types\FileAttachment', $r->fileAttachment);
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Types\Data', $r->fileAttachment->Data);
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Types\XopInclude', $r->fileAttachment->Data->xopInclude);
        $this->assertEquals('cid:attachment.bin@devbay.net', $r->fileAttachment->Data->xopInclude->href);
        $this->assertEquals(6, $r->fileAttachment->Size);

        // Calling the operation shouldn't modify an existing file attachment.
        $r = new Types\UploadFileRequest();
        $r->attachment('123ABC');
        $r->fileAttachment = new Types\FileAttachment();
        $r->fileAttachment->Data = new Types\Data();
        $r->fileAttachment->Data->xopInclude = new Types\XopInclude();
        $r->fileAttachment->Data->xopInclude->href = '123';
        $r->fileAttachment->Size = 8;
        $s->uploadFile($r);
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Types\FileAttachment', $r->fileAttachment);
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Types\Data', $r->fileAttachment->Data);
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Types\XopInclude', $r->fileAttachment->Data->xopInclude);
        $this->assertEquals('123', $r->fileAttachment->Data->xopInclude->href);
        $this->assertEquals(8, $r->fileAttachment->Size);
    }
}
