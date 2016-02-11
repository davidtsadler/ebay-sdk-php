<?php
namespace DTS\eBaySDK\Exceptions;

/**
 * A property was get/set that doesn't exist.
 */
class UnknownPropertyException extends \LogicException
{
    public function __construct($class, $property, $code = 0, \Exception $previous = null)
    {
        parent::__construct("Unknown property: $class::$property", $code, $previous);
    }
}
