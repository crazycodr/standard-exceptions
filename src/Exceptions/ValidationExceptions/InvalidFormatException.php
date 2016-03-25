<?php

namespace Exceptions\ValidationExceptions;

/**
 * Use this exception when the format of a value is not respected such as when a date time cannot be parsed due to the
 * format.
 *
 * Other formats can be unparsable, use this method to actually signal that a value cannot be parsed to it's final
 * state and must be provided again with a different format.
 *
 * Avoid using this exception if other subclassed exceptions exist for the right data such as
 * InvalidDateTimeFormatException or InvalidEmailFormatException.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class InvalidFormatException extends InvalidValueException
{
    public function __construct(
        $message = 'Data could not be parsed because of format error',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
