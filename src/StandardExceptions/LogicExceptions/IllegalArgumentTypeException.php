<?php

namespace StandardExceptions\LogicExceptions;

/**
 * Use this exception when an argument passed on to a non typed-hint function is of invalid type. Use this exception
 * sparingly and favor Validation exceptions as much as possible as this is mainly used as a logic error and not a
 * runtime error.
 *
 * This exception exists only to be backwards compatible with the InvalidArgumentException but will be probably
 * deprecated in the future.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class IllegalArgumentTypeException extends \InvalidArgumentException
{
    public function __construct(
        $message = 'Argument passed to function is not of expected type',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
