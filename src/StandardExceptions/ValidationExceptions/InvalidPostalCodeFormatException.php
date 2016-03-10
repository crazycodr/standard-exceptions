<?php

namespace StandardExceptions\ValidationExceptions;

/**
 * Use this exception when the string being passed on to your function detects that the PostalCode being passed on is
 * of incorrect format for the current locale.
 *
 * Refrain from using this exception as a signal for invalid value or inexistant postal code that you validated using
 * other means. If the postal code is validated against a datasource and ends up invalid throw an InvalidValueException
 * instead.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class InvalidPostalCodeFormatException extends InvalidFormatException
{
    public function __construct($message = 'Postal code could not be parsed', $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
