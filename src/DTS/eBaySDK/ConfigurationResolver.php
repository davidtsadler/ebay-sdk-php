<?php
namespace DTS\eBaySDK;

/**
 * @internal Resolves and validates an associative array of configuration options.
 */
class ConfigurationResolver
{
    /** @var array */
    private $definitions;

    /** @var array Map of type to function that confirms type. */
    private static $typeMap = [
        'array' => 'is_array',
        'bool' => 'is_bool',
        'callable' => 'is_callable',
        'int' => 'is_int',
        'string' => 'is_string'
    ];

    /**
     * @param array $definitions Definitions for each configuration option.
     */
    public function __construct($definitions)
    {
        $this->definitions = $definitions;
    }

    /**
     * Resolve and validate the passed configuration options.
     *
     * @param array $configuration Associative array of configuration options that will be resolved and validated.
     *
     * @return array Returns an associative array of the resolved and validated configuration options.
     * @throws \InvalidArgumentException.
     */
    public function resolve(array $configuration)
    {
        foreach($this->definitions as $key => $def) {
            if (!isset($configuration[$key])) {
                if (isset($def['default'])) {
                    $configuration[$key] = is_callable($def['default'])
                        ? $def['default']($configuration)
                        : $def['default'];
                } elseif (empty($def['required'])) {
                    continue;
                } else {
                    $this->throwRequired($configuration);
                }
            }

            $this->checkType($def['valid'], $key, $configuration[$key]);

            if (isset($def['fn'])) {
                $configuration[$key] = $def['fn']($configuration[$key]);
            }
        }

        return $configuration;
    }

    private function checkType($valid, $name, $provided)
    {
        foreach ($valid as $check) {
            if (isset(self::$typeMap[$check])) {
                $fn = self::$typeMap[$check];
                if ($fn($provided)) {
                    return;
                }
            } elseif ($provided instanceof $check) {
                return;
            }
        }

        $expected = implode('|', $valid);
        $msg = sprintf('Invalid configuration value provided for "%s". Expected %s, but got %s',
            $name,
            $expected,
            describe_type($provided)
        );
        throw new \InvalidArgumentException($msg);
    }

    private function throwRequired($configuration)
    {
        $missing = [];

        foreach($this->definitions as $key => $def) {
            if (empty($def['required'])
                || isset($def['default'])
                || array_key_exists($key, $configuration)
            ) {
                continue;
            }
            $missing[] = $key;
        }

        $msg = "Missing required configuration options: \n\n";
        $msg .= implode("\n\n", $missing);
        throw new \InvalidArgumentException($msg);
    }
}
