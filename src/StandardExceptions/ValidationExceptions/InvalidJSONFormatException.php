<?php

namespace Exceptions\ValidationExceptions;

/**
 * Use this exception when the string being passed on to your function detects that the JSON being passed on is of
 * incorrect format.
 *
 * Refrain from using this exception as a signal for invalid structure of JSON being passed. Your internal validation
 * that the model received should throw a standard InvalidValueException or something more customized.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class InvalidJSONFormatException extends InvalidFormatException
{
    public function __construct($message = 'JSON data could not be parsed', $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
