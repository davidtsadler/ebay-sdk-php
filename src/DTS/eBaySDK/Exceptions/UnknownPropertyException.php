<?php
/**
 * Copyright 2014 David T. Sadler
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

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
