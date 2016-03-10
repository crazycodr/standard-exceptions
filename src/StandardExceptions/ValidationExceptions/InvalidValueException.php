<?php

namespace StandardExceptions\ValidationExceptions;

/**
 * The base of all validation exceptions. If none of the exceptions that actually exist fit in correctly, you can try
 * and throw this but it would be better to define something a little more precise as any other validation exception in
 * the standard exceptions framework is an InvalidValueException. This could lead to unforseen logic errors.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class InvalidValueException extends \RangeException
{
    public function __construct(
        $message = 'The data passed on is invalid for this operation',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
