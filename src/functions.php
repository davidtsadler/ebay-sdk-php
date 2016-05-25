<?php
namespace DTS\eBaySDK;

use DTS\eBaySDK\Credentials\Credentials;
use DTS\eBaySDK\Credentials\CredentialsProvider;
use DTS\eBaySDK\Credentials\CredentialsInterface;
use DTS\eBaySDK\Debugger;
use DTS\eBaySDK\Handler;

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
 * Code taken from
 * https://api.drupal.org/api/drupal/includes!bootstrap.inc/function/drupal_array_merge_deep/7
 */
function arrayMergeDeep()
{
    $args = func_get_args();
    return arrayMergeDeepArray($args);
}

function arrayMergeDeepArray($arrays)
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

function applyCredentials($value, array &$configuration)
{
    if (is_callable($value)) {
        $c = $value();
        if ($c instanceof \InvalidArgumentException) {
            throw $c;
        } else {
            $configuration['credentials'] = $c;
        }
    } else if ($value instanceof CredentialsInterface) {
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

function applyProfile($value, array &$configuration)
{
    $configuration['credentials'] = CredentialsProvider::ini($configuration['profile']);
}

function applyDebug($value, array &$configuration)
{
    if ($value !== false) {
        $configuration['debug'] = new Debugger($value === true ? [] : $value);
    } else {
        $configuration['debug'] = false;
    }
}

function defaultHandler(array &$configuration)
{
    return new Handler();
}

/**
 * Helper function that returns true if the property type should be checked.
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
