<?php

namespace Exceptions\ValidationExceptions;

/**
 * Use this exception when the length of a string is invalid based on other parameters or domain validation.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class InvalidLengthException extends InvalidValueException
{
    public function __construct(
        $message = 'The length of the passed data is invalid for the requested operation',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
