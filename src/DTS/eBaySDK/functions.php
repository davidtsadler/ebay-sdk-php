<?php
namespace DTS\eBaySDK;

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
