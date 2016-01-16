<?php
namespace DTS\eBaySDK\Services\Test;

use DTS\eBaySDK\TestTraits\ManageEnv;
use DTS\eBaySDK\Services\BaseService;
use DTS\eBaySDK\Credentials\Credentials;
use DTS\eBaySDK\Credentials\CredentialsProvider;
use DTS\eBaySDK\Mocks\Service;
use DTS\eBaySDK\Mocks\ComplexClass;
use DTS\eBaySDK\Mocks\Handler;

class ServiceTest extends \PHPUnit_Framework_TestCase
{
    use ManageEnv;

    public function testConfigDefinitions()
    {
        $d = BaseService::getConfigDefinitions();

        $this->assertArrayHasKey('credentials', $d);
        $this->assertEquals([
            'valid'   => ['DTS\eBaySDK\Credentials\CredentialsInterface', 'array', 'callable'],
            'fn'      => 'DTS\eBaySDK\apply_credentials',
            'default' => [CredentialsProvider::class, 'defaultProvider']
        ], $d['credentials']);

        $this->assertArrayHasKey('debug', $d);
        $this->assertEquals([
            'valid'   => ['bool', 'array'],
            'fn'      => 'DTS\eBaySDK\apply_debug',
            'default' => false
        ], $d['debug']);

        $this->assertArrayHasKey('handler', $d);
        $this->assertEquals([
            'valid'   => ['callable'],
            'default' => 'DTS\eBaySDK\default_handler'
        ], $d['handler']);

        $this->assertArrayHasKey('profile', $d);
        $this->assertEquals([
            'valid' => ['string'],
            'fn'    => 'DTS\eBaySDK\apply_profile',
        ], $d['profile']);

        $this->assertArrayHasKey('sandbox', $d);
        $this->assertEquals([
            'valid'   => ['bool'],
            'default' => false
        ], $d['sandbox']);
    }

    public function testProductionUrlIsUsed()
    {
        // By default sandbox will be false.
        $h = new Handler();
        $s = new Service(['handler' => $h]);
        $s->foo(new ComplexClass());

        $this->assertEquals('http://production.com', $h->url);
    }

    public function testSandboxUrlIsUsed()
    {
        $h = new Handler();
        $s = new Service([
            'sandbox' => true,
            'handler' => $h
        ]);
        $s->foo(new ComplexClass());

        $this->assertEquals('http://sandbox.com', $h->url);
    }

    public function testHttpHeadersAreCreated()
    {
        $h = new Handler();
        $s = new Service(['handler' => $h]);
        $r = new ComplexClass();
        $s->foo($r);

        $this->assertArrayHasKey('fooHdr', $h->headers);
        $this->assertEquals('foo', $h->headers['fooHdr']);
        $this->assertArrayHasKey('Content-Type', $h->headers);
        $this->assertEquals('text/xml', $h->headers['Content-Type']);
        $this->assertArrayHasKey('Content-Length', $h->headers);
        $this->assertEquals(strlen($r->toRequestXml()), $h->headers['Content-Length']);
    }

    public function testXmlIsCreated()
    {
        $h = new Handler();
        $s = new Service(['handler' => $h]);
        $r = new ComplexClass();
        $s->foo($r);

        $this->assertEquals($r->toRequestXml(), $h->body);
    }

    public function testResponseIsReturned()
    {
        $s = new Service(['handler' => new Handler()]);
        $r = $s->foo(new ComplexClass());

        $this->assertInstanceOf('\DTS\eBaySDK\Mocks\ComplexClass', $r);
    }

    public function testDebugging()
    {
        $str = '';
        $logfn = function ($value) use (&$str) { $str .= $value; };

        $s = new Service([
            'debug' => ['logfn' => $logfn],
            'handler' => new Handler()
        ]);
        $r = new ComplexClass();
        $s->foo($r);

        $this->assertContains('fooHdr: foo', $str);
        $this->assertContains('Content-Type: text/xml', $str);
        $this->assertContains('Content-Length: '.strlen($r->toRequestXml()), $str);
        $this->assertContains('<?xml version="1.0" encoding="UTF-8"?>', $str);
    }

    public function testCredentialsInstanceCanBePassed()
    {
        $s = new Service([
            'credentials' => new Credentials('111', '222', '333'),
            'handler' => new Handler()
        ]);

        $c = $s->getCredentials();
        $this->assertEquals('111', $c->getAppId());
        $this->assertEquals('222', $c->getCertId());
        $this->assertEquals('333', $c->getDevId());
    }

    public function testCredentialsCanBeHardCoded()
    {
        $s = new Service([
            'credentials' => [
                'appId' => '111',
                'certId' => '222',
                'devId' => '333'
            ],
            'handler' => new Handler()
        ]);

        $c = $s->getCredentials();
        $this->assertEquals('111', $c->getAppId());
        $this->assertEquals('222', $c->getCertId());
        $this->assertEquals('333', $c->getDevId());
    }

    public function testCredentialsCanBeProvided()
    {
        $s = new Service([
            'credentials' => function () {
                return new Credentials('111', '222', '333');
            },
            'handler' => new Handler()
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

        $s = new Service([
            'profile' => 'foo',
            'handler' => new Handler()
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

        $s = new Service([
            'profile' => 'foo',
            'handler' => new Handler()
        ]);

        try {
            $c = $s->getCredentials();
        } catch (Exception $e) {
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
        $s = new Service([
            'credentials' => function () {
                return new \InvalidArgumentException('Cannot locate credentials');
            },
            'handler' => new Handler()
        ]);
    }

    public function testCanSetConfigurationOptionsAfterInstaniation()
    {
        $h = new Handler();
        $s = new Service([
            'sandbox' => true,
            'credentials' => [
                'appId' => '111',
                'certId' => '222',
                'devId' => '333'
            ],
            'handler' => $h
        ]);

        $this->assertEquals([
            'sandbox' => true,
            'credentials' => new Credentials('111', '222', '333'),
            'debug' => false,
            'handler' => $h
        ], $s->getConfig());

        $s->setConfig([
            'sandbox' => false,
            'credentials' => function () {
                return new Credentials('444', '555', '666');
            }
        ]);

        $this->assertEquals([
            'sandbox' => false,
            'credentials' => new Credentials('444', '555', '666'),
            'debug' => false,
            'handler' => $h
        ], $s->getConfig());
    }
}

