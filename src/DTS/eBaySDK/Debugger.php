<?php
namespace DTS\eBaySDK;

/**
 * @internal Handles outputing debug messages.
 */
class Debugger
{
    private $config;

    /**
     * @param array $config Debug configuration.
     */
    public function __construct($config)
    {
        $this->config = $config + [
            'logfn' => function ($value) { echo $value; }
        ];
    }

    public function __invoke($info)
    {
        $this->config['logfn']($info);
    }
}

