<?php

namespace Exceptions\Operation;

/**
 * Use this exception in the event that an operation that expected a certain result from a sub function/method call
 * but did not get what i expected. This exception is the reversed validation exception. Instead of validating the
 * user's input to a function, it is a means to signal that something went wrong when calling a sub components and
 * the result is unexpected.
 *
 * It was created only for backwards compatibility with UnexpectedValueException.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
class UnexpectedException extends OperationException
{
    const MESSAGE = 'Unexpected value returned by internal call';
    const CODE = 0;
}
