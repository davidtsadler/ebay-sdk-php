<?php
namespace DTS\eBaySDK;

use DTS\eBaySDK\Credentials\Credentials;
use DTS\eBaySDK\Credentials\CredentialsProvider;
use DTS\eBaySDK\Interfaces\CredentialsInterface;
use DTS\eBaySDK\Debugger;

function describe_type($value)
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
function array_merge_deep() {
    $args = func_get_args();
    return array_merge_deep_array($args);
}

function array_merge_deep_array($arrays) {
    $result = array();

    foreach ($arrays as $array) {
        foreach ($array as $key => $value) {
            // Renumber integer keys as array_merge_recursive() does. Note that PHP
            // automatically converts array keys that are integer strings (e.g., '1')
            // to integers.
            if (is_integer($key)) {
                $result[] = $value;
            } elseif (isset($result[$key]) && is_array($result[$key]) && is_array($value)) {
                // Recurse when both values are arrays.
                $result[$key] = array_merge_deep_array(array($result[$key], $value));
            } else {
                // Otherwise, use the latter value, overriding any previous value.
                $result[$key] = $value;
            }
        }
    }

    return $result;
}

function apply_credentials($value, array &$configuration)
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
        throw new \InvalidArgumentException('Credentials must be an instance of '
            . 'DTS\eBaySDK\Interfaces\CredentialsInterface, an associative '
            . 'array that contains "appId", "certId", "devId", '
            . 'or a credentials provider function.'
        );
    }
}

function apply_profile($value, array &$configuration)
{
    $configuration['credentials'] = CredentialsProvider::ini($configuration['profile']);
}

function apply_debug($value, array &$configuration)
{
    if ($value !== false) {
        $configuration['debug'] = new Debugger($value === true ? [] : $value);
    } else {
        $configuration['debug'] = false;
    }
}

