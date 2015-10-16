<?php
namespace DTS\eBaySDK\Credentials;

/**
 * Implementation of the CredentialsInterface that allows client code
 * to pass in their credentials in the constructor.
 */
class Credentials implements \DTS\eBaySDK\Interfaces\CredentialsInterface
{
    private $appId;
    private $authToken;
    private $certId;
    private $devId;

    /**
     * @param string $appId     Application ID
     * @param string $certId    Certificate ID
     * @param string $devId     Developer ID
     * @param string $authToken Optional auth token
     */
    public function __construct($appId, $certId, $devId, $authToken = null)
    {
        $this->appId = trim($appId);
        $this->authToken = trim($authToken);
        $this->certId = trim($certId);
        $this->devId = trim($devId);
    }

    public function getAppId()
    {
        return $this->appId;
    }

    public function getAuthToken()
    {
        return $this->authToken;
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

