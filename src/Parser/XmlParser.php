<?php
namespace DTS\eBaySDK\Parser;

/**
 * Responsible for parsing XML and returning a PHP object.
 */
class XmlParser
{
    /**
     * @var string The name of the PHP class that will be created.
     */
    private $rootObjectClass;

    /**
     * @var mixed The PHP object created from the XML.
     */
    private $rootObject;

    /**
     * @var \SplStack
     */
    private $metaStack;

    /**
     * @param string $rootObjectClass The name of the PHP class that will be created.
     */
    public function __construct($rootObjectClass)
    {
        $this->rootObjectClass = $rootObjectClass;

        $this->metaStack = new \SplStack();
    }

    /**
     * Parse the passed XML to create a PHP object.
     *
     * @param string $xml The xml string to parse.
     *
     * @return mixed A PHP object derived from DTS\eBaySDK\Types\BaseType
     */
    public function parse($xml)
    {
        $parser = xml_parser_create_ns('UTF-8', '@');

        xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);
        xml_parser_set_option($parser, XML_OPTION_SKIP_WHITE, 1);
        xml_set_object($parser, $this);
        xml_set_element_handler($parser, 'startElement', 'endElement');
        xml_set_character_data_handler($parser, 'cdata');

        xml_parse($parser, $xml, true);

        xml_parser_free($parser);

        return $this->rootObject;
    }

    /**
     * Handler for the parser that is called at the start of each XML element.
     *
     * @param resource $parser Reference to the XML parser calling the handler.
     * @param string $name The name of the element.
     * @param array $attributes Associative array of the element's attributes.
     */
    private function startElement($parser, $name, array $attributes)
    {
        $this->metaStack->push($this->getPhpMeta($this->normalizeElementName($name), $attributes));
    }

    /**
     * Handler for the parser that is called for character data.
     *
     * @param resource $parser Reference to the XML parser calling the handler.
     * @param string $cdata The character data.
     */
    private function cdata($parser, $cdata)
    {
        $this->metaStack->top()->strData .= $cdata;
    }

    /**
     * Handler for the parser that is called at the end of each XML element.
     *
     * Creates the required PHP object that represents the element and assigns
     * it to the parent PHP object.
     *
     * @param resource $parser Reference to the XML parser calling the handler.
     * @param string $name The name of the element.
     */
    private function endElement($parser, $name)
    {
        $meta = $this->metaStack->pop();

        if (!$this->metaStack->isEmpty()) {
            // Element in the XML may not exist as a property name in the class.
            // This could happen if the SDK is out of date with what eBay return.
            // It could also happen if eBay return elements that are not mentioned in any WSDL.
            if ($meta->propertyName !== '') {
                $parentObject = $this->getParentObject();
                // Parent object may not have been created if it didn't exist as a property name.
                if ($parentObject) {
                    if (!$meta->repeatable) {
                        $parentObject->{$meta->propertyName} = $this->getValueToAssign($meta);
                    } else {
                        $parentObject->{$meta->propertyName}[] = $this->getValueToAssign($meta);
                    }
                }
            }
        } else {
            $this->rootObject = $meta->phpObject;
        }
    }

    /**
     * Handles element names that may have namespaces in them.
     *
     * @param string $name Element name.
     *
     * @return string The element name stripped of any namespaces.
     */
    private function normalizeElementName($name)
    {
        $nsElement = explode('@', $name);

        if (count($nsElement) > 1) {
            array_shift($nsElement);
            return $nsElement[0];
        } else {
            return $name;
        }
    }

    /**
     * Returns the parent PHP object.
     *
     * @return mixed The parent PHP object.
     */
    private function getParentObject()
    {
        return $this->metaStack->top()->phpObject;
    }

    /**
     * Looks up the PHP meta data for the element.
     *
     * Allow the parser to build the required PHP object for an element.
     *
     * @param string $elementName The element name.
     * @param array $attributes Associative array of the element's attributes.
     *
     * @return \stdClass
     */
    private function getPhpMeta($elementName, array $attributes)
    {
        $meta = new \stdClass();
        $meta->propertyName = '';
        $meta->phpType = '';
        $meta->repeatable = false;
        $meta->attribute = false;
        $meta->elementName = '';
        $meta->strData = '';

        if (!$this->metaStack->isEmpty()) {
            $parentObject = $this->getParentObject();
            if ($parentObject) {
                $elementMeta = $parentObject->elementMeta($elementName);
                if ($elementMeta) {
                    $meta = $elementMeta;
                }
            }
        } else {
            $meta->phpType = $this->rootObjectClass;
        }

        $meta->phpObject = $this->newPhpObject($meta);

        if ($meta->phpObject) {
            foreach ($attributes as $attribute => $value) {
                // These attribute will simply not exist in a PHP object.
                if ('xmlns' === $attribute) {
                    continue;
                }
                $attributeMeta = $meta->phpObject->elementMeta($attribute);
                // Attribute in the XML may not exist as a property name in the class.
                // This could happen if the SDK is out of date with what eBay return.
                // It could also happen if eBay return elements that are not mentioned in any WSDL.
                if ($attributeMeta) {
                    $attributeMeta->strData = $value;
                    $meta->phpObject->{$attributeMeta->propertyName} = $this->getValueToAssignToProperty($attributeMeta);
                }
            }
        }

        return $meta;
    }

    /**
     * Builds the required PHP object.
     *
     * @param \stdClass $meta The PHP meta data.
     *
     * @return mixed A new PHP object or null.
     */
    private function newPhpObject(\stdClass $meta)
    {
        $phpTypes = explode('|', $meta->phpType);

        foreach ($phpTypes as $phpType) {
            switch ($phpType) {
                case 'integer':
                case 'string':
                case 'double':
                case 'boolean':
                case 'DateTime':
                    continue 2;
                default:
                    return $meta->phpType !== '' ? new $phpType() : null;
            }
        }

        return null;
    }

    /**
     * Returns a value that will be assigned to an object's property.
     *
     * @param \stdClass $meta The PHP meta data.
     *
     * @return mixed The value to assign.
     */
    private function getValueToAssign(\stdClass $meta)
    {
        if ($this->isSimplePhpType($meta)) {
            return $this->getValueToAssignToProperty($meta);
        } else {
            if ($this->setByValue($meta)) {
                $meta->phpObject->value = $this->getValueToAssignToValue($meta);
            }
            return $meta->phpObject;
        }
    }

    /**
     * Determines if the type of the property is simple.
     *
     * @param \stdClass $meta The PHP meta data.
     *
     * @return bool True if the property type is simple.
     */
    private function isSimplePhpType(\stdClass $meta)
    {
        $phpTypes = explode('|', $meta->phpType);

        foreach ($phpTypes as $phpType) {
            switch ($phpType) {
                case 'integer':
                case 'string':
                case 'double':
                case 'boolean':
                case 'DateTime':
                    continue 2;
                default:
                    return false;
            }
        }

        return true;
    }

    /**
     * Determines if the the property of an object is set by a _value_ property.
     *
     * @param \stdClass $meta The PHP meta data.
     *
     * @return bool True if the property needs to be set by _value_.
     */
    private function setByValue(\stdClass $meta)
    {
        return (
            is_subclass_of($meta->phpObject, '\DTS\eBaySDK\Types\Base64BinaryType', false) ||
            is_subclass_of($meta->phpObject, '\DTS\eBaySDK\Types\BooleanType', false) ||
            is_subclass_of($meta->phpObject, '\DTS\eBaySDK\Types\DecimalType', false) ||
            is_subclass_of($meta->phpObject, '\DTS\eBaySDK\Types\DoubleType', false) ||
            is_subclass_of($meta->phpObject, '\DTS\eBaySDK\Types\IntegerType', false) ||
            is_subclass_of($meta->phpObject, '\DTS\eBaySDK\Types\StringType', false) ||
            is_subclass_of($meta->phpObject, '\DTS\eBaySDK\Types\TokenType', false) ||
            is_subclass_of($meta->phpObject, '\DTS\eBaySDK\Types\URIType', false)
        );
    }

    /**
     * Returns a value that will be assigned to an object's property.
     *
     * @param \stdClass $meta The PHP meta data.
     *
     * @return mixed The value to assign.
     */
    private function getValueToAssignToProperty(\stdClass $meta)
    {
        switch ($meta->phpType) {
            case 'integer':
                return (integer)$meta->strData;
            case 'double':
                return (double)$meta->strData;
            case 'boolean':
                return strtolower($meta->strData) === 'true';
            case 'DateTime':
                return new \DateTime($meta->strData, new \DateTimeZone('UTC'));
            case 'string':
            default:
                return $meta->strData;
        }
    }

    /**
     * Returns a value that will be assigned to an object's _value_ property.
     *
     * @param \stdClass $meta The PHP meta data.
     *
     * @return mixed The value to assign.
     */
    private function getValueToAssignToValue(\stdClass $meta)
    {
        if (is_subclass_of($meta->phpObject, '\DTS\eBaySDK\Types\Base64BinaryType', false)) {
            return $meta->strData;
        } elseif (is_subclass_of($meta->phpObject, '\DTS\eBaySDK\Types\BooleanType', false)) {
            return strtolower($meta->strData) === 'true';
        } elseif (is_subclass_of($meta->phpObject, '\DTS\eBaySDK\Types\DecimalType', false)) {
            return is_int(0 + $meta->strData) ? (integer)$meta->strData : (double)$meta->strData;
        } elseif (is_subclass_of($meta->phpObject, '\DTS\eBaySDK\Types\DoubleType', false)) {
            return (double)$meta->strData;
        } elseif (is_subclass_of($meta->phpObject, '\DTS\eBaySDK\Types\IntegerType', false)) {
            return (integer)$meta->strData;
        } elseif (is_subclass_of($meta->phpObject, '\DTS\eBaySDK\Types\StringType', false)) {
            return $meta->strData;
        } elseif (is_subclass_of($meta->phpObject, '\DTS\eBaySDK\Types\TokenType', false)) {
            return $meta->strData;
        } elseif (is_subclass_of($meta->phpObject, '\DTS\eBaySDK\Types\URIType', false)) {
            return $meta->strData;
        }

        return $meta->strData;
    }
}
