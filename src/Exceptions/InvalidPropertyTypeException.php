<?php
namespace DTS\eBaySDK\Exceptions;

/**
 * The property was assigned a value of the wrong type.
 */
class InvalidPropertyTypeException extends \LogicException
{
    /**
     * @param string $property The property name.
     * @param string $expectedType The excpected type of the value..
     * @param string $actualType The actual type of the value.
     * @param int $code|0
     * @param \Exception
     */
    public function __construct($property, $expectedType, $actualType, $code = 0, \Exception $previous = null)
    {
        parent::__construct("Invalid property type provided for $property. Expected $expectedType but got $actualType", $code, $previous);
    }
}
