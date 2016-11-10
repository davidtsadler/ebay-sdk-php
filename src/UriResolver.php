<?php
namespace DTS\eBaySDK;

/**
 * @internal Resolves a resource uri.
 */
class UriResolver
{
    /**
     * @var array Map of type to function that confirms type.
     */
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
     *
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

    private function checkType(array $valid, $name, $provided)
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

    private function throwRequired(array $paramDefs, array $paramValues)
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

    /**
     * Replaces path parameters placeholders in the uri with the correct values.
     *
     * @param string $uri A uri with path parameters.
     * @param array $paramValues Associative array of path parameter names and their values.
     *
     * @return string The path.
     */
    private function fillPathParams($uri, array &$paramValues)
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

    /**
     * Builds a query parameters string.
     *
     * @param array $paramValues Associative array of query parameter names and their values.
     *
     * @return string The query parameters string
     */
    private function buildQueryParameters(array $paramValues)
    {
        if (empty($paramValues)) {
            return '';
        }

        $query = [];
        foreach ($paramValues as $param => $value) {
            if (is_array($value)) {
                $value = join(',', $value);
            } elseif (is_bool($value)) {
                $value = $value ? 'true' : 'false';
            } elseif (is_callable($value)) {
                $value = $value();
            }
            $query[] = $param.'='.urlencode($value);
        }
        return '?'.join('&', $query);
    }
}
