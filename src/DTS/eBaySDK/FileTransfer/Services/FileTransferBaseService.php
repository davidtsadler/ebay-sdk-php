<?php
namespace DTS\eBaySDK\FileTransfer\Services;

/**
 * Base class for the FileTransfer service.
 */
class FileTransferBaseService extends \DTS\eBaySDK\Services\BaseService
{
    /**
     * Constants for the various HTTP headers required by the API.
     */
    const HDR_API_VERSION = 'X-EBAY-SOA-SERVICE-VERSION';
    const HDR_AUTH_TOKEN = 'X-EBAY-SOA-SECURITY-TOKEN';
    const HDR_CONTENT_TYPE = 'CONTENT-TYPE';
    const HDR_MESSAGE_PROTOCOL = 'X-EBAY-SOA-MESSAGE-PROTOCOL';
    const HDR_OPERATION_NAME = 'X-EBAY-SOA-OPERATION-NAME';
    const HDR_SERVICE_NAME = 'X-EBAY-SOA-SERVICE-NAME';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config)
    {
        parent::__construct('https://storage.ebay.com/FileTransferService', 'https://storage.sandbox.ebay.com/FileTransferService', $config);
    }

    public static function getConfigDefinitions()
    {
        $definitions = parent::getConfigDefinitions();

        return $definitions + [
            'apiVersion' => [
                'valid' => ['string'],
                'default' => \DTS\eBaySDK\FileTransfer\Services\FileTransferService::API_VERSION
            ],
            'authToken' => [
                'valid' => ['string'],
                'required' => true
            ]
        ];
    }

    /**
     * Sends an API request.
     *
     * This method overrides the parent so that it can modify
     * the request object before is handled by the parent class.
     *
     * @param string $name The name of the operation.
     * @param \DTS\eBaySDK\Types\BaseType $request Request object containing the request information.
     * @param string The name of the PHP class that will be created from the XML response.
     *
     * @return mixed A response object created from the XML respose.
     */
    protected function callOperation($name, \DTS\eBaySDK\Types\BaseType $request, $responseClass)
    {
        /**
            Modify the request object to add xop:Include element.
         */
        if ($name === 'uploadFile' && $request->hasAttachment()) {
            /**
                Don't modify a request if the file attachment already exists.
             */
            if( !isset($request->fileAttachment)) {
                $request->fileAttachment = new \DTS\eBaySDK\FileTransfer\Types\FileAttachment();
            }

            if(!isset($request->fileAttachment->Data)) {
                $request->fileAttachment->Data = new \DTS\eBaySDK\FileTransfer\Types\Data([
                    'xopInclude' => new \DTS\eBaySDK\FileTransfer\Types\XopInclude([
                        'href' => 'cid:attachment.bin@devbay.net'
                    ])
                ]);
            }

            if(!isset($request->fileAttachment->Size)) {
                $attachment = $request->attachment();
                $request->fileAttachment->Size = strlen($attachment['data']);
            }
        }

        return parent::callOperation($name, $request, $responseClass);
    }

    /**
     * Build the needed eBay HTTP headers.
     *
     * @param string $operationName The name of the operation been called.
     *
     * @return array An associative array of eBay http headers.
     */
    protected function getEbayHeaders($operationName)
    {
        $headers = array();

        // Add required headers first.
        $headers[self::HDR_AUTH_TOKEN] = $this->getConfig('authToken');
        $headers[self::HDR_OPERATION_NAME] = $operationName;

        // Add optional headers.
        if ($this->getConfig('apiVersion')) {
            $headers[self::HDR_API_VERSION] = $this->getConfig('apiVersion');
        }

        return $headers;
    }
}

