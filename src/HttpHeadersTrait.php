<?php
namespace DTS\eBaySDK;

/**
 * Trait that allows objects to get/set HTTP headers.
 */
trait HttpHeadersTrait
{
    /**
     * @var array Associative array of headers and their values. The original header name is used as the key.
     */
    private $headers = [];

    /**
     * @var array Associative array of lowercase version of header names.
     */
    private $headerNames  = [];

    /**
     * Retrieves all header values.
     *
     * The keys represent the header name as it will be sent over the wire, and
     * each value is an array of strings associated with the header.
     *
     *     // Represent the headers as a string
     *     foreach ($obj->getHeaders() as $name => $values) {
     *         echo $name . ": " . implode(", ", $values);
     *     }
     *
     *     // Emit headers iteratively:
     *     foreach ($obj->getHeaders() as $name => $values) {
     *         foreach ($values as $value) {
     *             header(sprintf('%s: %s', $name, $value), false);
     *         }
     *     }
     *
     * While header names are not case-sensitive, getHeaders() will preserve the
     * exact case in which headers were originally specified.
     *
     * @return string[][] Returns an associative array of headers. Each
     * key will be a header name, and each value will be an array of strings
     * for that header.
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Checks if a header exists by the given case-insensitive name.
     *
     * @param string $header Case-insensitive header field name.
     *
     * @return bool Returns true if any header names match the given header
     * name using a case-insensitive string comparison. Returns false if
     * no matching header name is found in the message.
     */
    public function hasHeader($header)
    {
        return isset($this->headerNames[strtolower($header)]);
    }

    /**
     * Retrieves a message header value by the given case-insensitive name.
     *
     * This method returns an array of all the header values of the given
     * case-insensitive header name.
     *
     * If the header does not appear in the message, this method will return an
     * empty array.
     *
     * @param string $header Case-insensitive header field name.
     *
     * @return string[] An array of string values as provided for the given
     * header. If the header does not appear in the message, this method will
     * return an empty array.
     */
    public function getHeader($header)
    {
        $header = strtolower($header);

        if (!isset($this->headerNames[$header])) {
            return [];
        }

        $header = $this->headerNames[$header];

        return $this->headers[$header];
    }

    /**
     * Retrieves a comma-separated string of the values for a single header.
     *
     * This method returns all of the header values of the given
     * case-insensitive header name as a string concatenated together using
     * a comma.
     *
     * NOTE: Not all header values may be appropriately represented using
     * comma concatenation. For such headers, use getHeader() instead
     * and supply your own delimiter when concatenating.
     *
     * If the header does not appear in the message, this method will return
     * an empty string.
     *
     * @param string $header Case-insensitive header field name.
     *
     * @return string A string of values as provided for the given header
     * concatenated together using a comma. If the header does not appear in
     * the message, this method will return an empty string.
     */
    public function getHeaderLine($header)
    {
        return implode(', ', $this->getHeader($header));
    }

    /**
     * Stores the passed HTTP headers. Ensures header values can be access in a case-insenitive way
     * while preserving the original case of the header name.
     *
     * @param array $headers Associative array of HTTP headers.
     */
    private function setHeaders(array $headers)
    {
        $this->headerNames = $this->headers = [];
        foreach ($headers as $header => $value) {
            if (!is_array($value)) {
                $value = [$value];
            }

            $value = $this->trimHeaderValues($value);
            $normalized = strtolower($header);
            if (isset($this->headerNames[$normalized])) {
                $header = $this->headerNames[$normalized];
                $this->headers[$header] = array_merge($this->headers[$header], $value);
            } else {
                $this->headerNames[$normalized] = $header;
                $this->headers[$header] = $value;
            }
        }
    }

    /**
     * Trims whitespace from the header values.
     *
     * @param string[] $values Header values
     *
     * @return string[] Trimmed header values
     */
    private function trimHeaderValues(array $values)
    {
        return array_map(function ($value) {
            return trim($value, " \t");
        }, $values);
    }
}
