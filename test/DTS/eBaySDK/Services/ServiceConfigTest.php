<?php
use DTS\eBaySDK\Mocks\Service;
use DTS\eBaySDK\Mocks\HttpClient;

class ServiceConfigTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        // BaseService is abstract so use class that is derived from it for testing.
        $this->obj = new Service();
    }

    public function testConfig()
    {
        // Passing no parameters to the config method returns the configuration as an associative array.
        $config = $this->obj->config();
        $this->assertInternalType('array', $config);
        // Should be an empty array as no configuration was passed into the object ctor during construction.
        $this->assertEquals(0, count($config));

        // Should return null if a configuration option has not been set.
        $this->assertEquals(null, $this->obj->config('foo'));

        // Passing the name of a configuration option and a value will set that option.
        $this->obj->config('foo', 1);
        // We can get the value of a configuration option just by passing its name.
        $this->assertEquals(1, $this->obj->config('foo'));

        // Returns the value assigned to the configuration option.
        $value = $this->obj->config('foo', 'foo');
        $this->assertEquals('foo', $value);

        // Can pass an associative array to set multiple configuration options.
        $options = array(
            'bish' => 'bish',
            'bash' => 'bash',
            'bosh' => 'bosh'
        );
        $config = $this->obj->config($options);
        $this->assertEquals($options, $config);
        $this->assertEquals($options, $this->obj->config());
    }

    public function testGettingInvalidConfig()
    {
        $this->setExpectedException('\DTS\eBaySDK\Exceptions\UnknownConfigurationOptionException', 'Unknown configuration option: DTS\eBaySDK\Mocks\Service::bar');

        $this->obj->config('bar');
    }

    public function testSettingInvalidConfig()
    {
        $this->setExpectedException('\DTS\eBaySDK\Exceptions\UnknownConfigurationOptionException', 'Unknown configuration option: DTS\eBaySDK\Mocks\Service::bar');

        $this->obj->config('bar', 'xxx');
    }

    public function testSettingInvalidConfigViaArray()
    {
        $this->setExpectedException('\DTS\eBaySDK\Exceptions\UnknownConfigurationOptionException', 'Unknown configuration option: DTS\eBaySDK\Mocks\Service::bar');

        $config = $this->obj->config(array(
            'bish' => 'bish',
            'bar' => 'xxx'
        ));
    }

    public function testSandboxConfigExists()
    {
        // Should default to false.
        $this->assertEquals(false, $this->obj->config('sandbox'));

        $this->obj->config('sandbox', true);
        $this->assertEquals(true, $this->obj->config('sandbox'));
    }

    public function testDebugConfigExists()
    {
        // Should default to false.
        $this->assertEquals(false, $this->obj->config('debug'));

        $this->obj->config('debug', true);
        $this->assertEquals(true, $this->obj->config('debug'));
    }
}
