<?php
namespace DTS\eBaySDK\Test\OAuth\Services;

use DTS\eBaySDK\Test\TestTraits\ManageEnv;
use DTS\eBaySDK\OAuth\Services\OAuthService;
use DTS\eBaySDK\Test\Mocks\HttpOAuthHandler;
use DTS\eBaySDK\Credentials\Credentials;
use DTS\eBaySDK\Credentials\CredentialsProvider;

class ServiceTest extends \PHPUnit_Framework_TestCase
{
    use ManageEnv;

    public function testConfigDefinitions()
    {
        $d = OAuthService::getConfigDefinitions();

        $this->assertArrayHasKey('credentials', $d);
        $this->assertEquals([
            'valid'   => ['DTS\eBaySDK\Credentials\CredentialsInterface', 'array', 'callable'],
            'fn'      => 'DTS\eBaySDK\applyCredentials',
            'default' => [CredentialsProvider::class, 'defaultProvider']
        ], $d['credentials']);

        $this->assertArrayHasKey('debug', $d);
        $this->assertEquals([
            'valid'   => ['bool', 'array'],
            'fn'      => 'DTS\eBaySDK\applyDebug',
            'default' => false
        ], $d['debug']);

        $this->assertArrayHasKey('httpHandler', $d);
        $this->assertEquals([
            'valid'   => ['callable'],
            'default' => 'DTS\eBaySDK\defaultHttpHandler'
        ], $d['httpHandler']);

        $this->assertArrayHasKey('httpOptions', $d);
        $this->assertEquals([
            'valid'   => ['array'],
            'default' => ['http_errors' => false]
        ], $d['httpOptions']);

        $this->assertArrayHasKey('profile', $d);
        $this->assertEquals([
            'valid' => ['string'],
            'fn'    => 'DTS\eBaySDK\applyProfile',
        ], $d['profile']);

        $this->assertArrayHasKey('ruName', $d);
        $this->assertEquals([
            'valid'   => ['string'],
            'required' => true
        ], $d['ruName']);

        $this->assertArrayHasKey('sandbox', $d);
        $this->assertEquals([
            'valid'   => ['bool'],
            'default' => false
        ], $d['sandbox']);
    }

    public function testSandboxRedirectUrlForUser()
    {
        $s = new OAuthService([
            'credentials' => [
                'appId'  => 'foo',
                'certId' => 'bar',
                'devId'  => ''
            ],
            'ruName'      => 'baz',
            'sandbox'     => true
        ]);
        $url = 'https://auth.sandbox.ebay.com/oauth2/authorize?client_id=foo&redirect_uri=baz&response_type=code&state=111&scope=https%3A%2F%2Fapi.ebay.com%2Foauth%2Fapi_scope%2Fsell.account%20https%3A%2F%2Fapi.ebay.com%2Foauth%2Fapi_scope%2Fsell.inventory';

        $this->assertEquals($url, $s->redirectUrlForUser([
            'state'  => '111',
            'scope' => [
                'https://api.ebay.com/oauth/api_scope/sell.account',
                'https://api.ebay.com/oauth/api_scope/sell.inventory'
            ]
        ]));
    }

    public function testProductionRedirectUrlForUser()
    {
        $s = new OAuthService([
            'credentials' => [
                'appId'  => 'foo',
                'certId' => 'bar',
                'devId'  => ''
            ],
            'ruName'      => 'baz'
        ]);
        $url = 'https://auth.ebay.com/oauth2/authorize?client_id=foo&redirect_uri=baz&response_type=code&state=111&scope=https%3A%2F%2Fapi.ebay.com%2Foauth%2Fapi_scope%2Fsell.account%20https%3A%2F%2Fapi.ebay.com%2Foauth%2Fapi_scope%2Fsell.inventory';

        $this->assertEquals($url, $s->redirectUrlForUser([
            'state'  => '111',
            'scope' => [
                'https://api.ebay.com/oauth/api_scope/sell.account',
                'https://api.ebay.com/oauth/api_scope/sell.inventory'
            ]
        ]));
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage state parameter
     */
    public function testExceptionThrowForMissingStateParam()
    {
        $s = new OAuthService([
            'credentials' => [
                'appId'  => 'foo',
                'certId' => 'bar',
                'devId'  => ''
            ],
            'ruName'      => 'baz'
        ]);

        $s->redirectUrlForUser([
            'scope' => []
        ]);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage scope parameter
     */
    public function testExceptionThrowForMissingScopeParam()
    {
        $s = new OAuthService([
            'credentials' => [
                'appId'  => 'foo',
                'certId' => 'bar',
                'devId'  => ''
            ],
            'ruName'      => 'baz'
        ]);

        $s->redirectUrlForUser([
            'state' => ''
        ]);
    }
    public function testProductionUrlIsUsed()
    {
        // By default sandbox will be false.
        $h = new HttpOAuthHandler();
        $s = new OAuthService([
            'credentials' => [
                'appId'  => '',
                'certId' => '',
                'devId'  => ''
            ],
            'ruName'      => 'foo',
            'httpHandler' => $h
        ]);
        $s->getAppToken();

        $this->assertEquals('https://api.ebay.com/identity/v1/oauth2/token', $h->url);
    }

    public function testSandboxUrlIsUsed()
    {
        $h = new HttpOAuthHandler();
        $s = new OAuthService([
            'credentials' => [
                'appId'  => '',
                'certId' => '',
                'devId'  => ''
            ],
            'ruName'      => 'foo',
            'sandbox'     => true,
            'httpHandler' => $h
        ]);
        $s->getAppToken();

        $this->assertEquals('https://api.sandbox.ebay.com/identity/v1/oauth2/token', $h->url);
    }

    public function testHttpHeadersAreCreated()
    {
        $h = new HttpOAuthHandler();
        $s = new OAuthService([
            'credentials' => [
                'appId'  => 'foo',
                'certId' => 'bar',
                'devId'  => ''
            ],
            'ruName'      => 'foo',
            'httpHandler' => $h
        ]);
        $s->getAppToken();

        $this->assertArrayHasKey('Accept', $h->headers);
        $this->assertEquals('application/json', $h->headers['Accept']);
        $this->assertArrayHasKey('Authorization', $h->headers);
        $this->assertEquals('Basic '.base64_encode('foo:bar'), $h->headers['Authorization']);
        $this->assertArrayHasKey('Content-Type', $h->headers);
        $this->assertEquals('application/x-www-form-urlencoded', $h->headers['Content-Type']);
        $this->assertArrayHasKey('Content-Length', $h->headers);
        $this->assertEquals(strlen(http_build_query([
            'grant_type'   => 'client_credentials',
            'redirect_uri' => 'foo',
            'scope'        => 'https://api.ebay.com/oauth/api_scope'
        ])), $h->headers['Content-Length']);
    }

    public function testBodyIsCreated()
    {
        $h = new HttpOAuthHandler();
        $s = new OAuthService([
            'credentials' => [
                'appId'  => 'foo',
                'certId' => 'bar',
                'devId'  => ''
            ],
            'ruName'      => 'foo',
            'httpHandler' => $h
        ]);
        $s->getAppToken();
        $this->assertEquals(http_build_query([
            'grant_type'   => 'client_credentials',
            'redirect_uri' => 'foo',
            'scope'        => 'https://api.ebay.com/oauth/api_scope'
        ]), $h->body);
    }

    public function testResponseIsReturned()
    {
        $h = new HttpOAuthHandler();
        $s = new OAuthService([
            'credentials' => [
                'appId'  => 'foo',
                'certId' => 'bar',
                'devId'  => ''
            ],
            'ruName'      => 'foo',
            'httpHandler' => $h
        ]);
        $r = $s->getAppToken();

        $this->assertInstanceOf('\DTS\eBaySDK\OAuth\Types\GetAppTokenRestResponse', $r);
        $this->assertEquals('foo', $r->access_token);
        $this->assertEquals('bar', $r->token_type);
        $this->assertEquals(123, $r->expires_in);
        $this->assertEquals('baz', $r->refresh_token);
    }

    public function testDebugging()
    {
        $str = '';
        $logfn = function ($value) use (&$str) {
            $str .= $value;
        };
        $body = http_build_query([
            'grant_type'   => 'client_credentials',
            'redirect_uri' => 'foo',
            'scope'        => 'https://api.ebay.com/oauth/api_scope'
        ]);

        $s = new OAuthService([
            'credentials' => [
                'appId'  => 'foo',
                'certId' => 'bar',
                'devId'  => ''
            ],
            'ruName'      => 'foo',
            'debug'       => ['logfn' => $logfn],
            'httpHandler' => new HttpOAuthHandler()
        ]);
        $r = $s->getAppToken();

        $this->assertContains('Content-Type: application/x-www-form-urlencoded', $str);
        $this->assertContains('Content-Length: '.strlen($body), $str);
        $this->assertContains('foo', $str);
        $this->assertContains('bar', $str);
    }

    public function testCredentialsInstanceCanBePassed()
    {
        $s = new OAuthService([
            'credentials' => new Credentials('111', '222', '333'),
            'ruName'      => 'foo'
        ]);

        $c = $s->getCredentials();
        $this->assertEquals('111', $c->getAppId());
        $this->assertEquals('222', $c->getCertId());
        $this->assertEquals('333', $c->getDevId());
    }

    public function testCredentialsCanBeHardCoded()
    {
        $s = new OAuthService([
            'credentials' => [
                'appId' => '111',
                'certId' => '222',
                'devId' => '333'
            ],
            'ruName'      => 'foo'
        ]);

        $c = $s->getCredentials();
        $this->assertEquals('111', $c->getAppId());
        $this->assertEquals('222', $c->getCertId());
        $this->assertEquals('333', $c->getDevId());
    }

    public function testCredentialsCanBeProvided()
    {
        $s = new OAuthService([
            'credentials' => function () {
                return new Credentials('111', '222', '333');
            },
            'ruName'      => 'foo'
        ]);

        $c = $s->getCredentials();
        $this->assertEquals('111', $c->getAppId());
        $this->assertEquals('222', $c->getCertId());
        $this->assertEquals('333', $c->getDevId());
    }

    public function testCredentialsCanBeLoadedFromIni()
    {
        $ini = <<<EOT
[foo]
ebay_app_id = 111
ebay_cert_id = 222
ebay_dev_id = 333
EOT;

        $dir = $this->clearEnv();
        file_put_contents($dir . '/credentials', $ini);
        putenv('HOME=' . dirname($dir));

        $s = new OAuthService([
            'profile' => 'foo',
            'ruName'  => 'foo'
        ]);
        $c = $s->getCredentials();

        $this->assertEquals('111', $c->getAppId());
        $this->assertEquals('222', $c->getCertId());
        $this->assertEquals('333', $c->getDevId());

        unlink($dir . '/credentials');
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage No credentials present in INI profile
     */
    public function testCredentialsIniWillThrowException()
    {
        $ini = <<<EOT
[foo]
EOT;

        $dir = $this->clearEnv();
        file_put_contents($dir . '/credentials', $ini);
        putenv('HOME=' . dirname($dir));

        $s = new OAuthService([
            'profile' => 'foo',
            'ruName'      => 'foo'
        ]);

        try {
            $s->getCredentials();
        } catch (\Exception $e) {
            unlink($dir . '/credentials');
            throw $e;
        }
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Cannot locate credentials
     */
    public function testCredentialsProviderThrowsIfCantProvide()
    {
        new OAuthService([
            'credentials' => function () {
                return new \InvalidArgumentException('Cannot locate credentials');
            },
            'ruName'      => 'foo'
        ]);
    }

    public function testCanSetConfigurationOptionsAfterInstaniation()
    {
        $h = new HttpOAuthHandler();
        $s = new OAuthService([
            'credentials'  => [
                'appId'  => 'foo',
                'certId' => 'bar',
                'devId'  => ''
            ],
            'ruName'       => 'foo',
            'sandbox' => true,
            'httpHandler'  => $h,
            'httpOptions' => []
        ]);

        $this->assertEquals([
            'apiVersion'  => 'v1',
            'credentials' => new Credentials('foo', 'bar', ''),
            'ruName'      => 'foo',
            'sandbox'     => true,
            'debug'       => false,
            'httpHandler' => $h,
            'httpOptions' => []
        ], $s->getConfig());

        $s->setConfig([
            'sandbox' => false,
        ]);

        $this->assertEquals([
            'apiVersion'  => 'v1',
            'credentials' => new Credentials('foo', 'bar', ''),
            'ruName'      => 'foo',
            'sandbox'     => false,
            'debug'       => false,
            'httpHandler' => $h,
            'httpOptions' => []
        ], $s->getConfig());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid configuration value provided for "sandbox". Expected bool, but got int(-1)
     */
    public function testSetConfigWillThrow()
    {
        $s = new OAuthService([
            'credentials' => [
                'appId'  => '',
                'certId' => '',
                'devId'  => ''
            ],
            'ruName'      => 'foo',
            'x'           => 1
        ]);

        $s->setConfig(['sandbox' => -1]);
    }
}
