<?php
namespace DTS\eBaySDK\Credentials\Test;

use DTS\eBaySDK\TestTraits\ManageEnv;
use DTS\eBaySDK\Credentials\CredentialsProvider;
use DTS\eBaySDK\Credentials\Credentials;

class CredentialsProvideerTest extends \PHPUnit_Framework_TestCase
{
    use ManageEnv;

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

    function testMemoize()
    {
        $called = 0;
        $c = new Credentials('111', '222', '333');
        $f = function () use (&$called, &$c) {
            $called++;
            return $c;
        };
        $p = CredentialsProvider::memoize($f);
        $this->assertSame($c, $p());
        $this->assertEquals(1, $called);
        $this->assertSame($c, $p());
        $this->assertEquals(1, $called);
    }

    function testChain()
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

        $a = CredentialsProvider::ini('foo');
        $b = CredentialsProvider::ini();
        $c = function () { throw new \InvalidArgumentException('Should not be called'); };

        $p = CredentialsProvider::chain($a, $b, $c);
        $c = $p();

        $this->assertEquals('111', $c->getAppId());
        $this->assertEquals('222', $c->getCertId());
        $this->assertEquals('333', $c->getDevId());

        unlink($dir . '/credentials');
    }

    function testTrysEnvVarByDefault()
    {
        $this->clearEnv();
        putenv(CredentialsProvider::ENV_APP_ID . '=111');
        putenv(CredentialsProvider::ENV_CERT_ID . '=222');
        putenv(CredentialsProvider::ENV_DEV_ID . '=333');

        $p = CredentialsProvider::defaultProvider();
        $c = $p();

        $this->assertEquals('111', $c->getAppId());
        $this->assertEquals('222', $c->getCertId());
        $this->assertEquals('333', $c->getDevId());
    }

    function testTrysIniByDefault()
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

        $p = CredentialsProvider::defaultProvider();
        $c = $p();

        $this->assertEquals('111', $c->getAppId());
        $this->assertEquals('222', $c->getCertId());
        $this->assertEquals('333', $c->getDevId());

        unlink($dir . '/credentials');
    }
}

