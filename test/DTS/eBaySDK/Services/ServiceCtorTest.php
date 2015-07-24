<?php
use DTS\eBaySDK\Mocks\Service;
use DTS\eBaySDK\Mocks\HttpClient;

class ServiceCtorTest extends \PHPUnit_Framework_TestCase
{
    private $config = array(
        'bish' => 'bish',
        'bash' => 'bash',
        'bosh' => 'bosh',
        'sandbox' => true
    );

    protected function setUp()
    {
        // BaseService is abstract so use class that is derived from it for testing.
        // Can pass in an associative array of configuration options.
        $this->obj = new Service($this->config);
    }

    public function testConfigurationOptionsHaveBeenSetInCtor()
    {
        $this->assertEquals($this->config, $this->obj->config());
    }

    public function testInvalidConfigurationOptionsHaveBeenSetInCtor()
    {
        $this->setExpectedException('\DTS\eBaySDK\Exceptions\UnknownConfigurationOptionException', 'Unknown configuration option: DTS\eBaySDK\Mocks\Service::bar');

        new Service(array(
            'bish' => 'bish',
            'bar' => 'xxx'
        ), new HttpClient());
    }
}
