<?php
namespace DTS\eBaySDK\Types;

use \DTS\eBaySDK\Types;
use \DTS\eBaySDK\Exceptions;
use \DTS\eBaySDK\JmesPath\Env;
use \DTS\eBaySDK\JmesPath\JmesPathableObjectInterface;

/**
 * Base class for all API objects.
 *
 */
class BaseType implements JmesPathableObjectInterface
{
    /**
     * @var array Associative array containing meta data about each property.
     * The array key is the class name of the PHP object.
     * This way we only store a single copy of the meta data for each class.
     * For each class name the value will be an associative array.
     * The array key is the name that client code will use to access the property.
     * The value is an associative array which is the meta data for the property.
     *
     * 'subject' => [                  The name of the property.
     *     'type' => 'string',         The data type or class name.
     *     'repeatable' => false,         Indicates if the property is repeatable, I.e is an array.
     *     'attribute' => false,       Indicates if the proeprty is an attribute in the XML.
     *     'elementName' => 'Subject'  The corressponding element in the XML.
     * ]
     *
     */
    protected static $properties = [];

    /**
     * @var array Associative array. Key is the class name and the value is the xml namespace.
     */
    protected static $xmlNamespaces = [];

    /**
     * @var array Associative array. Key is the name of the XML root element used in the request.
     */
    protected static $requestXmlRootElementNames = [];

    /**
     * @var array When a property is set the value will be stored in this array.
     */
    private $values = [];

    /**
     * @var array Associative array storing an attachment.
     */
    private $attachment;

    /**
     * @param array $values Can pass an associative array that will set the objects properties.
     */
    public function __construct(array $values = [])
    {
        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = [];
        }

        $this->setValues(__CLASS__, $values);

        $this->attachment = ['data' => null, 'mimeType' => null];
    }

    /**
     * PHP magic function that is called when getting a property.
     *
     * @param string $name The property name.
     *
     * @return mixed
     */
    public function __get($name)
    {
        return $this->get(get_class($this), $name);
    }

    /**
     * PHP magic function that is called when setting a property.
     *
     * @param string $name The property name.
     * @param mixed $value Value assigned to the property.
     */
    public function __set($name, $value)
    {
        $this->set(get_class($this), $name, $value);
    }

    /**
     * PHP magic function that is called to determine if a property is set.
     *
     * @param string $name The property name.
     *
     * @return bool
     */
    public function __isset($name)
    {
        return $this->isPropertySet(get_class($this), $name);
    }

    /**
     * PHP magic function that is called to unset a property.
     *
     * @param string $name The property name.
     */
    public function __unset($name)
    {
        $this->unSetProperty(get_class($this), $name);
    }

    /**
     * Converts the object to a XML request string.
     *
     * @return string The XML request string.
     */
    public function toRequestXml()
    {
        return $this->toXml(self::$requestXmlRootElementNames[get_class($this)], true);
    }

    /**
     * Converts the object to a XML string.
     *
     * @param string $elementName The XML element that the object's properties will be a children of.
     * @param bool $rootElement Indicates if the XML will be the root element.
     *
     * @return string The XML.
     */
    private function toXml($elementName, $rootElement = false)
    {
        return sprintf(
            '%s<%s%s%s>%s</%s>',
            $rootElement ? "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n" : '',
            $elementName,
            $this->attributesToXml(),
            array_key_exists(get_class($this), self::$xmlNamespaces) ? sprintf(' %s', self::$xmlNamespaces[get_class($this)]) : '',
            $this->propertiesToXml(),
            $elementName
        );
    }

    /**
     * Returns the meta data for a property.
     *
     * This method is used when parsing the XML into a PHP object. The parser
     * needs the meta data for a property when the parser has only the element name.
     *
     * @param string $elementName The element name.
     *
     * @return mixed The meta for the property or null if not found.
     */
    public function elementMeta($elementName)
    {
        $class = get_class($this);
        if (array_key_exists($elementName, self::$properties[$class])) {
            $info = self::$properties[$class][$elementName];
            $nameKey = $info['attribute'] ? 'attributeName' : 'elementName';
            if (array_key_exists($nameKey, $info)) {
                if ($info[$nameKey] === $elementName) {
                    $meta = new \stdClass();
                    $meta->propertyName = $elementName;
                    $meta->phpType = $info['type'];
                    $meta->repeatable = $info['repeatable'];
                    $meta->attribute = $info['attribute'];
                    $meta->elementName = $info[$nameKey];
                    $meta->strData = '';

                    return $meta;
                }
            }
        }

        return null;
    }

    /**
     * Method to get or set the object's attachment. Overrides any existing attachment is setting.
     *
     * @param mixed $data If a string it is assumed to be the contents of the attachment. If an array copy its values across.
     * @param string $mimeType The MIME type of the attachment that will be used in the request. Defaults to application/octet-stream.
     *
     * @return mixed Returns the contents of the current atachment or null if none has been specified.
     */
    public function attachment($data = null, $mimeType = 'application/octet-stream')
    {
        if ($data !== null) {
            if (is_array($data)) {
                $this->attachment['data'] = array_key_exists('data', $data) ? $data['data'] : null;
                $this->attachment['mimeType'] = array_key_exists('mimeType', $data) ? $data['mimeType'] : 'application/octet-stream';
            } else {
                $this->attachment['data'] = $data;
                $this->attachment['mimeType'] = $mimeType;
            }
        }

        return $this->attachment;
    }

    /**
     * Helper method to check if an object has an attachment.
     *
     * @return bool Returns true if an object has an attachment.
     */
    public function hasAttachment()
    {
        return $this->attachment['data'] !== null;
    }

    /**
     * Helper method that returns an associative array of the object's properties and values.
     *
     * @return array Associative array where the keys are the object's properties.
     */
    public function toArray()
    {
        $array = [];

        foreach (self::$properties[get_class($this)] as $name => $info) {
            if (!array_key_exists($name, $this->values)) {
                continue;
            }

            $value = $this->values[$name];

            if ($info['repeatable']) {
                if (count($value)) {
                    $array[$name] = [];
                    foreach ($value as $property) {
                        $array[$name][] = self::propertyToArrayValue($property);
                    }
                }
            } else {
                $array[$name] = self::propertyToArrayValue($value);
            }
        }

        return $array;
    }

    /**
     * Assign multiple values to an object.
     *
     * @param string $expression A valid JMESPath expression
     *
     * @return mixed The results of the search.
     */
    public function search($expression)
    {
        return Env::search($expression, $this);
    }

    /**
     * @return string JSON string of the object's properties and values.
     */
    public function __toString()
    {
        return json_encode($this->toArray());
    }

    /**
     * Assign multiple values to an object.
     *
     * @param string $class The name of the class the properties belong to.
     * @param array $values. Associative array of property names and their values.
     *
     * @throws \DTS\eBaySDK\Exceptions\UnknownPropertyException If the property does not exist.
     * @throws \DTS\eBaySDK\Exceptions\InvalidPropertyTypeException If the value is the wrong type for the property.
     */
    protected function setValues($class, array $values = [])
    {
        foreach ($values as $property => $value) {
            $value = self::removeNull($value);
            if (!is_null($value)) {
                $actualValue = self::determineActualValueToAssign($class, $property, $value);
                $this->set($class, $property, $actualValue);
            }
        }
    }

    /**
     * Return a property's value.
     *
     * @param string $class The name of the class the property belongs to.
     * @param string $name The property name.
     *
     * @return mixed The property value.
     * @throws \DTS\eBaySDK\Exceptions\UnknownPropertyException If the property does not exist.
     */
    private function get($class, $name)
    {
        self::ensurePropertyExists($class, $name);

        return $this->getValue($class, $name);
    }

    /**
     * Assign a value to a property.
     *
     * @param string $class The name of the class the properties belong to.
     * @param string $name The property name.
     * @param mixed $value. The value to assign to the property.
     *
     * @throws \DTS\eBaySDK\Exceptions\UnknownPropertyException If the property does not exist.
     * @throws \DTS\eBaySDK\Exceptions\InvalidPropertyTypeException If the value is the wrong type for the property.
     */
    private function set($class, $name, $value)
    {
        self::ensurePropertyExists($class, $name);
        self::ensurePropertyType($class, $name, $value);

        $this->setValue($class, $name, $value);
    }

    /**
     * Determine if a property has been set.
     *
     * @param string $class The name of the class the properties belong to.
     * @param string $name The property name.
     *
     * @return bool Returns if the property has been set.
     * @throws \DTS\eBaySDK\Exceptions\UnknownPropertyException If the property does not exist.
     */
    private function isPropertySet($class, $name)
    {
        self::ensurePropertyExists($class, $name);

        return array_key_exists($name, $this->values);
    }

    /**
     *  Unset a property.
     *
     * @param string $class The name of the class the properties belong to.
     * @param string $name The property name.
     *
     * @throws \DTS\eBaySDK\Exceptions\UnknownPropertyException If the property does not exist.
     */
    private function unSetProperty($class, $name)
    {
        self::ensurePropertyExists($class, $name);

        unset($this->values[$name]);
    }

    /**
     * Get the value of a property. Assumes property exists.
     *
     * @param string $class The name of the class the properties belong to.
     * @param string $name The property name.
     *
     * @return mixed The property value.
     */
    private function getValue($class, $name)
    {
        $info = self::propertyInfo($class, $name);

        if ($info['repeatable'] && !array_key_exists($name, $this->values)) {
            $this->values[$name] = new Types\RepeatableType($class, $name, $info['type']);
        }

        return array_key_exists($name, $this->values) ? $this->values[$name] : null;
    }

    /**
     * Set the value of a property. Assumes property exists.
     *
     * @param string $class The name of the class the properties belong to.
     * @param string $name The property name.
     * @param mixed $value. The value to assign to the property.
     *
     * @throws \DTS\eBaySDK\Exceptions\InvalidPropertyTypeException If trying to assign a non array type to an repeatable property.
     */
    private function setValue($class, $name, $value)
    {
        $info = self::propertyInfo($class, $name);

        if (!$info['repeatable']) {
            $this->values[$name] = $value;
        } else {
            $actualType = self::getActualType($value);
            if ('array' !== $actualType) {
                throw new Exceptions\InvalidPropertyTypeException($name, 'DTS\eBaySDK\Types\RepeatableType', $actualType);
            } else {
                $this->values[$name] = new Types\RepeatableType(get_class($this), $name, $info['type']);
                foreach ($value as $item) {
                    $this->values[$name][] = $item;
                }
            }
        }
    }

    /**
     * Returns an XML string of the object's attributes.
     *
     * @return string The XML.
     */
    private function attributesToXml()
    {
        $attributes = [];

        foreach (self::$properties[get_class($this)] as $name => $info) {
            if (!$info['attribute']) {
                continue;
            }

            if (!array_key_exists($name, $this->values)) {
                continue;
            }

            $attributes[] = self::attributeToXml($info['attributeName'], $this->values[$name]);
        }

        return join('', $attributes);
    }

    /**
     * Returns an XML string of the object's properties.
     *
     * @return string The XML.
     */
    private function propertiesToXml()
    {
        $properties = [];

        foreach (self::$properties[get_class($this)] as $name => $info) {
            if ($info['attribute']) {
                continue;
            }

            if (!array_key_exists($name, $this->values)) {
                continue;
            }

            $value = $this->values[$name];

            if (!array_key_exists('elementName', $info) && !array_key_exists('attributeName', $info)) {
                $properties[] = self::encodeValueXml($value);
            } else {
                if ($info['repeatable']) {
                    foreach ($value as $property) {
                        $properties[] = self::propertyToXml($info['elementName'], $property);
                    }
                } else {
                    $properties[] = self::propertyToXml($info['elementName'], $value);
                }
            }
        }

        return join("\n", $properties);
    }

    /**
     * Determines if the property is a member of the class.
     *
     * @param string $class The name of the class that we are checking for.
     * @param string $name The property name.
     *
     * @throws \DTS\eBaySDK\Exceptions\UnknownPropertyException If the property does not exist.
     */
    private static function ensurePropertyExists($class, $name)
    {
        if (!array_key_exists($name, self::$properties[$class])) {
            throw new Exceptions\UnknownPropertyException($name);
        }
    }

    /**
     * Determines if the value is the correct type to assign to a property.
     *
     * @param string $class The name of the class that we are checking for.
     * @param mixed $name The property name.
     * @param mixed $value The value to check the type of.
     *
     * @throws \DTS\eBaySDK\Exceptions\InvalidPropertyTypeException If the value is the wrong type for the property.
     */
    private static function ensurePropertyType($class, $name, $value)
    {
        $isValid = false;
        $info = self::propertyInfo($class, $name);
        $actualType = self::getActualType($value);
        $valid = explode('|', $info['type']);

        foreach ($valid as $check) {
            if ($check !== 'any' && \DTS\eBaySDK\checkPropertyType($check)) {
                if ($check === $actualType || 'array' === $actualType) {
                    return;
                }
                $isValid = false;
            } else {
                $isValid = true;
            }
        }

        if (!$isValid) {
            $expectedType = $info['type'];
            throw new Exceptions\InvalidPropertyTypeException($name, $expectedType, $actualType);
        }
    }

    /**
     * Helper function to return the actual type of a value.
     *
     * @param mixed $value The value we want the type of.
     *
     * @return string The type name of the value.
     */
    private static function getActualType($value)
    {
        $actualType = gettype($value);

        if ('object' === $actualType) {
            $actualType = get_class($value);
        }

        return $actualType;
    }

    /**
     * Helper function to return the meta data of a property.
     *
     * @param string $class The name of the class the property belongs to.
     * @param string $name The property name.
     *
     * @return array The meta data for the property.
     */
    private static function propertyInfo($class, $name)
    {
        return self::$properties[$class][$name];
    }

    /**
     * Helper function to remove the properties and values that belong to a object's parent.
     *
     * @param array $properties
     * @param array $values
     *
     * @return array The first element is an array of parent properties and values.
     * The second element is an array of the object's properties and values.
     */
    protected static function getParentValues(array $properties, array $values)
    {
        return [
            array_diff_key($values, $properties),
            array_intersect_key($values, $properties)
        ];
    }

    /**
     * Helper function to convert an attribute property into XML
     *
     * @param string $name The attribute name.
     * @param mixed $value The attribute value.
     *
     * @return string The XML.
     */
    private static function attributeToXml($name, $value)
    {
        return sprintf(' %s="%s"', $name, self::encodeValueXml($value));
    }

    /**
     * Helper function to convert an property into XML
     *
     * @param string $name The property name.
     * @param mixed $value The property value.
     *
     * @return string The XML.
     */
    private static function propertyToXml($name, $value)
    {
        if (is_subclass_of($value, '\DTS\eBaySDK\Types\BaseType', false)) {
            return $value->toXml($name);
        } else {
            return sprintf('<%s>%s</%s>', $name, self::encodeValueXml($value), $name);
        }
    }

    /**
     * Helper function to convert a value into XML
     *
     * @param mixed $value The property value.
     *
     * @return string The XML.
     */
    private static function encodeValueXml($value)
    {
        if ($value instanceof \DateTime) {
            return $value->format('Y-m-d\TH:i:s.000\Z');
        } elseif (is_bool($value)) {
            return $value ? 'true' : 'false';
        } else {
            return htmlspecialchars($value, ENT_QUOTES, 'UTF-8', true);
        }
    }

    /**
     * Helper function to convert a property in a value that we want in an array.
     *
     * @param mixed $value The property value.
     *
     * @return mixed A value to add to an array.
     */
    private static function propertyToArrayValue($value)
    {
        if (is_subclass_of($value, '\DTS\eBaySDK\Types\BaseType', false)) {
            return $value->toArray();
        } elseif ($value instanceof \DateTime) {
            return $value->format('Y-m-d\TH:i:s.000\Z');
        } else {
            return $value;
        }
    }

    /**
     * Helper function when assigning values via the ctor.
     * Determines the actual value to assign to a property.
     *
     * @param string $class The name of the class the property belong to.
     * @param string $property The property name.
     * @param mixed $value The property value.
     *
     * @return mixed
     */
    private static function determineActualValueToAssign($class, $property, $value)
    {
        if (!array_key_exists($property, self::$properties[$class])) {
            return $value;
        }

        $info = self::propertyInfo($class, $property);

        if ($info['repeatable'] && is_array($value)) {
            $values = [];
            foreach ($value as $val) {
                $values[] = self::actualValue($info, $val);
            }
            return $values;
        }

        return self::actualValue($info, $value);
    }

    /**
     * Helper function when assigning values via the ctor.
     *
     * @param array $info The metadata for the property.
     * @param mixed $value The property value.
     *
     * @return mixed
     */
    private static function actualValue(array $info, $value)
    {
        /**
         * Shortcut. Objects can be assigned as is.
         */
        if (is_object($value)) {
            return $value;
        }

        $types = explode('|', $info['type']);

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

        return new $info['type']($value);
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
}
