<?php
namespace DTS\eBaySDK\Test\Services;

use DTS\eBaySDK\Services\BaseRestService;
use DTS\eBaySDK\Test\Mocks\RestService;
use DTS\eBaySDK\Test\Mocks\ComplexClass;
use DTS\eBaySDK\Test\Mocks\HttpRestHandler;

class RestServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testConfigDefinitions()
    {
        $d = BaseRestService::getConfigDefinitions();

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

        $this->assertArrayHasKey('requestLanguage', $d);
        $this->assertEquals([
            'valid'   => ['string']
        ], $d['requestLanguage']);

        $this->assertArrayHasKey('responseLanguage', $d);
        $this->assertEquals([
            'valid'   => ['string']
        ], $d['responseLanguage']);

        $this->assertArrayHasKey('sandbox', $d);
        $this->assertEquals([
            'valid'   => ['bool'],
            'default' => false
        ], $d['sandbox']);
    }

    public function testProductionUrlIsUsed()
    {
        // By default sandbox will be false.
        $h = new HttpRestHandler();
        $s = new RestService([
            'httpHandler'   => $h
        ]);
        $s->foo(new ComplexClass());

        $this->assertEquals('http://production.com/v1/', $h->url);
    }

    public function testSandboxUrlIsUsed()
    {
        $h = new HttpRestHandler();
        $s = new RestService([
            'sandbox' => true,
            'httpHandler'   => $h
        ]);
        $s->foo(new ComplexClass());

        $this->assertEquals('http://sandbox.com/v1/', $h->url);
    }

    public function testHttpHeadersAreCreated()
    {
        $h = new HttpRestHandler();
        $s = new RestService([
            'requestLanguage' => 'en-GB',
            'responseLanguage' => 'en-US',
            'sandbox' => true,
            'httpHandler'   => $h
        ]);
        $s->foo(new ComplexClass());

        $this->assertArrayHasKey('Accept', $h->headers);
        $this->assertEquals('application/json', $h->headers['Accept']);
        $this->assertArrayHasKey('Accept-Language', $h->headers);
        $this->assertEquals('en-US', $h->headers['Accept-Language']);
        $this->assertArrayHasKey('Content-Language', $h->headers);
        $this->assertEquals('en-GB', $h->headers['Content-Language']);
        $this->assertArrayHasKey('Content-Type', $h->headers);
        $this->assertEquals('application/json', $h->headers['Content-Type']);
        $this->assertArrayHasKey('Content-Length', $h->headers);
        $this->assertEquals(0, $h->headers['Content-Length']);
    }

    public function testJsonIsCreated()
    {
        $h = new HttpRestHandler();
        $s = new RestService([
            'httpHandler'   => $h
        ]);
        $r = new ComplexClass();
        $r->foo = 'foo';
        $s->foo($r);

        $this->assertEquals(json_encode($r->toArray()), $h->body);
    }

    public function testJsonIsNotCreated()
    {
        $h = new HttpRestHandler();
        $s = new RestService([
            'httpHandler'   => $h
        ]);
        $s->foo(new ComplexClass());

        $this->assertEquals('', $h->body);
    }

    public function testResponseIsReturned()
    {
        $s = new RestService([
            'httpHandler'   => new HttpRestHandler()
        ]);
        $r = $s->foo(new ComplexClass());

        $this->assertInstanceOf('\DTS\eBaySDK\Test\Mocks\ComplexClass', $r);
    }

    public function testDebugging()
    {
        $str = '';
        $logfn = function ($value) use (&$str) {
            $str .= $value;
        };

        $s = new RestService([
            'debug' => ['logfn' => $logfn],
            'httpHandler'   => new HttpRestHandler()
        ]);
        $r = new ComplexClass();
        $r->foo = 'foo';
        $s->foo($r);

        $this->assertContains('Content-Type: application/json', $str);
        $this->assertContains('Content-Length: '.strlen(json_encode($r->toArray())), $str);
        $this->assertContains('{', $str);
        $this->assertContains('}', $str);
    }

    public function testCanSetConfigurationOptionsAfterInstaniation()
    {
        $h = new HttpRestHandler();
        $s = new RestService([
            'sandbox' => true,
            'httpHandler' => $h,
            'httpOptions' => []
        ]);

        $this->assertEquals([
            'apiVersion' => 'v1',
            'sandbox' => true,
            'debug' => false,
            'httpHandler' => $h,
            'httpOptions' => []
        ], $s->getConfig());

        $s->setConfig([
            'sandbox' => false,
        ]);

        $this->assertEquals([
            'apiVersion' => 'v1',
            'sandbox' => false,
            'debug' => false,
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
        $s = new RestService([
            'x'=> 1
        ]);

        $s->setConfig(['sandbox' => -1]);
    }
}
