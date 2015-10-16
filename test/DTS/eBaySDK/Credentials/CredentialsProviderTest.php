<?php
namespace DTS\eBaySDK\Credentials\Test;

use DTS\eBaySDK\Credentials\CredentialsProvider;

class CredentialsProvideerTest extends \PHPUnit_Framework_TestCase
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

    public function testCreatesFromEnvironmentVariables()
    {
        $this->clearEnv();
        putenv(CredentialsProvider::ENV_APP_ID . '=111');
        putenv(CredentialsProvider::ENV_CERT_ID . '=222');
        putenv(CredentialsProvider::ENV_DEV_ID . '=333');

        $p = CredentialsProvider::env();
        $c = $p();

        $this->assertEquals('111', $c->getAppId());
        $this->assertEquals('222', $c->getCertId());
        $this->assertEquals('333', $c->getDevId());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Could not find environment variable
     */
    public function testReturnsExceptionIfNoEnvironmentVariables()
    {
        $this->clearEnv();

        $p = CredentialsProvider::env();
        $c = $p();

        throw $c;
    }

    public function testCreatesFromIniFile()
    {
        $ini = <<<EOT
[default]
ebay_app_id = 111
ebay_cert_id = 222
ebay_dev_id = 333
EOT;

        $dir = $this->clearEnv();
        file_put_contents($dir . '/credentials', $ini);
        putenv('HOME=' . dirname($dir));

        $p = CredentialsProvider::ini('default');
        $c = $p();

        $this->assertEquals('111', $c->getAppId());
        $this->assertEquals('222', $c->getCertId());
        $this->assertEquals('333', $c->getDevId());

        unlink($dir . '/credentials');
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid credentials file
     */
    public function testEnsuresIniFileIsValid()
    {
        $dir = $this->clearEnv();
        file_put_contents($dir . '/credentials', "wef \n=\nwef");
        putenv('HOME=' . dirname($dir));

        $p = CredentialsProvider::ini();
        $c = @$p();

        unlink($dir . '/credentials');

        throw $c;
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Cannot read credentials from
     */
    public function testEnsuresIniFileExists()
    {
        $this->clearEnv();
        putenv('HOME=/does/not/exist');

        $p = CredentialsProvider::ini();
        $c = $p();

        throw $c;
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage No credentials present in INI profile
     */
    public function testEnsuresProfileIsNotEmpty()
    {
        $ini = <<<EOT
[default]
ebay_app_id = 111
ebay_cert_id = 222
ebay_dev_id = 333
[foo]
EOT;

        $dir = $this->clearEnv();
        file_put_contents($dir . '/credentials', $ini);
        putenv('HOME=' . dirname($dir));

        $p = CredentialsProvider::ini('foo');
        $c = $p();

        unlink($dir . '/credentials');

        throw $c;
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage 'foo' not found in credentials file
     */
    public function testEnsuresFileIsNotEmpty()
    {
        $dir = $this->clearEnv();
        file_put_contents($dir . '/credentials', '');
        putenv('HOME=' . dirname($dir));

        $p = CredentialsProvider::ini('foo');
        $c = $p();

        unlink($dir . '/credentials');

        throw $c;
    }
}

