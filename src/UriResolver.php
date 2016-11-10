<?php
namespace DTS\eBaySDK;

/**
 * @internal Resolves a resource uri.
 */
class UriResolver
{
    /** @var array Map of type to function that confirms type. */
    private static $typeMap = [
        'array' => 'is_array',
        'bool' => 'is_bool',
        'callable' => 'is_callable',
        'int' => 'is_int',
        'string' => 'is_string'
    ];

    public function __construct()
    {
    }

    /**
     * Resolve and validate the passed uri.
     *
     * @param string $uri Uri to resolve.
     * @param string $version API version.
     * @param string $resource The name of the resource.
     * @param array $paramDefs Associative array of uri parameter definitions for the operation.
     * @param array $paramValues Associative array of uri parameter values for the operation.
     * @return string Returns a resolved uri.
     * @throws \InvalidArgumentException.
     */
    public function resolve($uri, $version, $resource, array $paramDefs, array $paramValues)
    {
        foreach ($paramValues as $param => $value) {
            if (!array_key_exists($param, $paramDefs)) {
                throw new \InvalidArgumentException("Unknown uri parameter \"$param\" provided");
            }
        }

        foreach ($paramDefs as $key => $def) {
            if (!isset($paramValues[$key])) {
                if (isset($def['default'])) {
                    $paramValues[$key] = is_callable($def['default'])
                        ? $def['default']($paramValues)
                        : $def['default'];
                } elseif (empty($def['required'])) {
                    continue;
                } else {
                    $this->throwRequired($paramDefs, $paramValues);
                }
            }

            $this->checkType($def['valid'], $key, $paramValues[$key]);

            if (isset($def['fn'])) {
                $def['fn']($paramValues[$key], $paramValues);
            }
        }

        return (
            "$uri/".
            "$version/".
            $this->fillPathParams($resource, $paramValues).
            $this->buildQueryParameters($paramValues)
        );
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
        $msg = sprintf(
            'Invalid uri parameter value provided for "%s". Expected %s, but got %s',
            $name,
            $expected,
            describeType($provided)
        );
        throw new \InvalidArgumentException($msg);
    }

    private function throwRequired($paramDefs, $paramValues)
    {
        $missing = [];

        foreach ($paramDefs as $key => $def) {
            if (empty($def['required'])
                || isset($def['default'])
                || array_key_exists($key, $paramValues)
            ) {
                continue;
            }
            $missing[] = $key;
        }

        $msg = "Missing required uri parameters: \n\n";
        $msg .= implode("\n\n", $missing);
        throw new \InvalidArgumentException($msg);
    }

    private function fillPathParams($uri, &$paramValues)
    {
        return preg_replace_callback('/{(\S+)}/U', function ($matches) use (&$paramValues) {
            $path = $matches[1];
            if (array_key_exists($path, $paramValues)) {
                $value = $paramValues[$path];
                unset($paramValues[$path]);
            } else {
                $value = $path;
            }
            return $value;
        }, $uri);
    }

    private function buildQueryParameters($paramValues)
    {
        if (empty($paramValues)) {
            return '';
        }

        $query = [];
        foreach ($paramValues as $param => $value) {
            if (is_array($value)) {
                $value = join(',', $value);
            } else if (is_bool($value)) {
                $value = $value ? 'true' : 'false';
            } else if (is_callable($value)) {
                $value = $value();
            }
            $query[] = $param.'='.urlencode($value);
        }
        return '?'.join('&', $query);
    }
}
