<?php
namespace DTS\eBaySDK\Exceptions;

/**
 * The property was assigned a value of the wrong type.
 */
class InvalidPropertyTypeException extends \LogicException
{
    public function __construct($class, $property, $expectedType, $actualType, $code = 0, \Exception $previous = null)
    {
        parent::__construct("Invalid property type: $class::$property expected <$expectedType>, got <$actualType>", $code, $previous);
    }
}
