<?php

namespace StandardExceptions\ValidationExceptions;

/**
 * Use this exception when the string being passed on to your function detects that the regex being passed on is of
 * incorrect format and refused by preg functions or similar functions.
 *
 * Refrain from using this exception as a signal for invalid value that did not match the regex, instead throw an
 * InvalidValueException instead.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class InvalidRegexFormatException extends InvalidFormatException
{
    public function __construct($message = 'Regular expression could not be parsed', $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
