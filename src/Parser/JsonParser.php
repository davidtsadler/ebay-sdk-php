<?php
namespace DTS\eBaySDK\Parser;

class JsonParser
{
    /**
     * @param mixed A PHP object derived from DTS\eBaySDK\Types\BaseType
     * @param string $json The JSON string to parse.
     */
    public static function parseAndAssignProperties($object, $json)
    {
        $properties = $json !== '' ? json_decode($json, true) : [];
        self::assignProperties($object, $properties);
    }

    private static function assignProperties(\DTS\eBaySDK\Types\BaseType $object, array $properties)
    {
        foreach ($properties as $property => $value) {
            $propertyMeta = $object->elementMeta($property);
            // Property in the JSON may not exist as a property name in the class.
            // This could happen if the SDK is out of date with what eBay return.
            // It could also happen if eBay return elements that are not mentioned in any documentation!
            if ($propertyMeta) {
                $value = self::removeNull($value);
                if (!is_null($value)) {
                    $actualValue = self::determineActualValueToAssign($propertyMeta, $value);
                    $object->{$propertyMeta->propertyName} = $actualValue;
                }
            }
        }
    }

    /**
     * @param mixed $value Remove null elements if an array.
     *
     * @return mixed Original value if not an array or array without null elements.
     */
    private static function removeNull($value)
    {
        if (!is_array($value)) {
            return $value;
        }

        return array_filter($value, function ($val) {
            return !is_null($val);
        });
    }

    /**
     * @param \stdClass $propertyMeta The metadata for the property.
     * @param mixed $value The property value.
     *
     * @return mixed
     */
    private static function determineActualValueToAssign($propertyMeta, $value)
    {
        if ($propertyMeta->repeatable && is_array($value)) {
            $values = [];
            foreach ($value as $val) {
                $values[] = self::actualValue($propertyMeta, $val);
            }
            return $values;
        }

        return self::actualValue($propertyMeta, $value);
    }

    /**
     * @param \stdClass $propertyMeta The metadata for the property.
     * @param mixed $value The property value.
     *
     * @return mixed
     */
    private static function actualValue(\stdClass $propertyMeta, $value)
    {
        /**
         * Shortcut. Objects can be assigned as is.
         */
        if (is_object($value)) {
            return $value;
        }

        $types = explode('|', $propertyMeta->phpType);

        foreach ($types as $type) {
            switch ($type) {
                case 'integer':
                case 'string':
                case 'double':
                case 'boolean':
                case 'any':
                    return $value;
                case 'DateTime':
                    return new \DateTime($value, new \DateTimeZone('UTC'));
            }
        }

        $object = new $propertyMeta->phpType();
        self::assignProperties($object, $value);
        return $object;
    }
}
