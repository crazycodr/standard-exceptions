<?php

namespace Exceptions\ValidationExceptions;

/**
 * Use this exception when the information being passed on to your function detects an invalid datetime in terms of
 * domain validation. For example, the value must be within a certain range or in a set of valid values but isn't.
 *
 * Refrain from using this exception in the event you want to certify the hard type passed to the function is right. If
 * you expect a string or \DateTime to be passed and the string cannot be parsed to a \DateTime, throw a
 * InvalidDateTimeFormatException instead.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class InvalidDateTimeException extends InvalidValueException
{
    public function __construct(
        $message = 'The data is not a valid datetime for this operation',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
