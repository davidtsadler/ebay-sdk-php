<?php
namespace DTS\eBaySDK\TestTraits;

use DTS\eBaySDK\Credentials\CredentialsProvider;

trait ManageEnv
{
    private $appId, $certId, $devId, $profile;

    private $home, $homedrive, $homepath;

    private function clearEnv()
    {
        putenv(CredentialsProvider::ENV_APP_ID . '=');
        putenv(CredentialsProvider::ENV_CERT_ID . '=');
        putenv(CredentialsProvider::ENV_DEV_ID . '=');
        putenv(CredentialsProvider::ENV_PROFILE . '=');

        $dir = sys_get_temp_dir(). '/.ebay_sdk';

        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }

        return $dir;
    }

    public function setUp()
    {
        $this->appId = getenv(CredentialsProvider::ENV_APP_ID);
        $this->certId = getenv(CredentialsProvider::ENV_CERT_ID);
        $this->devId = getenv(CredentialsProvider::ENV_DEV_ID);
        $this->profile = getenv(CredentialsProvider::ENV_PROFILE);
        $this->home = getenv('HOME');
        $this->homedrive = getenv('HOMEDRIVE');
        $this->homepath = getenv('HOMEPATH');
    }

    public function tearDown()
    {
        putenv(CredentialsProvider::ENV_APP_ID . '=' . $this->appId);
        putenv(CredentialsProvider::ENV_CERT_ID . '=' . $this->certId);
        putenv(CredentialsProvider::ENV_DEV_ID . '=' . $this->devId);
        putenv(CredentialsProvider::ENV_PROFILE . '=' . $this->profile);
        putenv('HOME=' . $this->home);
        putenv('HOMEDRIVE=' . $this->homedrive);
        putenv('HOMEPATH=' . $this->homepath);
    }
}

