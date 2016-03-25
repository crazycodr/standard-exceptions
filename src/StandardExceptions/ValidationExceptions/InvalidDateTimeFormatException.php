<?php

namespace Exceptions\ValidationExceptions;

/**
 * Use this exception when the date being passed is of an invalid format that ends up being unparsable.
 *
 * Refrain from using this to signal incorrect dates in regards to the domain model. Instead use InvalidValueException
 * if this situation occurs.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class InvalidDateTimeFormatException extends InvalidFormatException
{
    public function __construct(
        $message = 'Date/Time data could not be parsed into real date',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
