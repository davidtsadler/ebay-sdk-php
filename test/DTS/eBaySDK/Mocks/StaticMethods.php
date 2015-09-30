<?php
namespace DTS\eBaySDK\Mocks;

class StaticMethods
{
    public static function defaultConfigValue($configuration)
    {
        return -1;
    }

    public static function applyConfigValue($value)
    {
        return $value * 3;
    }
}
