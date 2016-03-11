<?php
namespace DTS\eBaySDK\Exceptions;

/**
 * The property was assigned a value of the wrong type.
 */
class InvalidPropertyTypeException extends \LogicException
{
    public function __construct($property, $expectedType, $actualType, $code = 0, \Exception $previous = null)
    {
        parent::__construct("Invalid property type provided for $property. Expected $expectedType but got $actualType", $code, $previous);
    }
}
