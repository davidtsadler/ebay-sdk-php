<?php
namespace DTS\eBaySDK\Credentials\Test;

use DTS\eBaySDK\Credentials\Credentials;

class CredentialsTest extends \PHPUnit_Framework_TestCase
{
    public function testHasGetters()
    {
        $c = new Credentials('111', '222', '333', '444');

        $this->assertEquals('111', $c->getAppId());
        $this->assertEquals('222', $c->getCertId());
        $this->assertEquals('333', $c->getDevId());
    }
}
