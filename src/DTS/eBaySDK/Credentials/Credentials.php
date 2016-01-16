<?php
namespace DTS\eBaySDK\Credentials;

/**
 * Implementation of the CredentialsInterface that allows client code
 * to pass in their credentials in the constructor.
 */
class Credentials implements \DTS\eBaySDK\Credentials\CredentialsInterface
{
    private $appId;
    private $certId;
    private $devId;

    /**
     * @param string $appId  Application ID
     * @param string $certId Certificate ID
     * @param string $devId  Developer ID
     */
    public function __construct($appId, $certId, $devId)
    {
        $this->appId = trim($appId);
        $this->certId = trim($certId);
        $this->devId = trim($devId);
    }

    public function getAppId()
    {
        return $this->appId;
    }

    public function getCertId()
    {
        return $this->certId;
    }

    public function getDevId()
    {
        return $this->devId;
    }
}

