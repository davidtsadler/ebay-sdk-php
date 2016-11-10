<?php
namespace DTS\eBaySDK;

use DTS\eBaySDK\Credentials\Credentials;
use DTS\eBaySDK\Credentials\CredentialsProvider;
use DTS\eBaySDK\Credentials\CredentialsInterface;

/**
 * Returns a description of the type for the passed value.
 *
 * @param mixed $value The value whos type will be described.
 *
 * @return string A description of the value's type.
 */
function describeType($value)
{
    switch (gettype($value)) {
        case 'object':
            return 'object('. get_class($value) . ')';
        case 'array':
            return 'array(' . count($value) . ')';
        default:
            ob_start();
            var_dump($value);
            return str_replace('double(', 'float(', rtrim(ob_get_clean()));
    }
}

/**
 * Merges multiple arrays, recursively, and returns the merged array.
 * Code taken from
 * https://api.drupal.org/api/drupal/includes!bootstrap.inc/function/drupal_array_merge_deep/7
 *
 * @return array The merged array.
 */
function arrayMergeDeep()
{
    $args = func_get_args();
    return arrayMergeDeepArray($args);
}

/**
 * Merges multiple arrays, recursively, and returns the merged array.
 *
 * @param array $arrays The arrays to merge.
 *
 * @return array The merged array.
 */
function arrayMergeDeepArray(array $arrays)
{
    $result = [];

    foreach ($arrays as $array) {
        foreach ($array as $key => $value) {
            // Renumber integer keys as array_merge_recursive() does. Note that PHP
            // automatically converts array keys that are integer strings (e.g., '1')
            // to integers.
            if (is_integer($key)) {
                $result[] = $value;
            } elseif (isset($result[$key]) && is_array($result[$key]) && is_array($value)) {
                // Recurse when both values are arrays.
                $result[$key] = arrayMergeDeepArray(array($result[$key], $value));
            } else {
                // Otherwise, use the latter value, overriding any previous value.
                $result[$key] = $value;
            }
        }
    }

    return $result;
}

/**
 * Resolve and apply the passed credentials.
 *
 * @param mixed $value The credentials.
 * @param array &$configuration The configuration array where the resolved credentials will be stored.
 *
 * @throws \InvalidArgumentException.
 */
function applyCredentials($value, array &$configuration)
{
    if (is_callable($value)) {
        $c = $value();
        if ($c instanceof \InvalidArgumentException) {
            throw $c;
        } else {
            $configuration['credentials'] = $c;
        }
    } elseif ($value instanceof CredentialsInterface) {
        return;
    } elseif (is_array($value)
        && isset($value['appId'])
        && isset($value['certId'])
        && isset($value['devId'])
    ) {
        $configuration['credentials'] = new Credentials(
            $value['appId'],
            $value['certId'],
            $value['devId']
        );
    } else {
        throw new \InvalidArgumentException(
            'Credentials must be an instance of '
            . 'DTS\eBaySDK\Credentials\CredentialsInterface, an associative '
            . 'array that contains "appId", "certId", "devId", '
            . 'or a credentials provider function.'
        );
    }
}

/**
 * Resolves the credentials with a ini provider.
 *
 * @param mixed $value Not used.
 * @param array &$configuration The configuration array where the provider will be stored.
 */
function applyProfile($value, array &$configuration)
{
    $configuration['credentials'] = CredentialsProvider::ini($configuration['profile']);
}

/**
 * Applies the default debugger if required.
 *
 * @param mixed $value Debugger options.
 * @param array &$configuration The configuration array where the resolved debugger will be stored.
 */
function applyDebug($value, array &$configuration)
{
    if ($value !== false) {
        $configuration['debug'] = new Debugger($value === true ? [] : $value);
    } else {
        $configuration['debug'] = false;
    }
}

/**
 * Returns the default HTTP handler.
 *
 * @param array &$configuration Not used.
 *
 * @return \DTS\eBaySDK\HttpHandler
 */
function defaultHttpHandler(array &$configuration)
{
    return new HttpHandler();
}

/**
 * Helper function that returns true if the property type should be checked.
 *
 * @param string $type The type name.
 *
 * @return bool
 */
function checkPropertyType($type)
{
    if (\DTS\eBaySDK\Sdk::$STRICT_PROPERTY_TYPES) {
        return true;
    }

    switch ($type) {
        case 'integer':
        case 'string':
        case 'double':
        case 'boolean':
        case 'DateTime':
            return false;
        default:
            return true;
    }
}
