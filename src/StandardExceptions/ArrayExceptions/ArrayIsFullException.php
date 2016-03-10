<?php

namespace StandardExceptions\ArrayExceptions;

/**
 * Use this exception when an operation on an array cannot be achieved because the array has already reached it's
 * limit and cannot accept more data.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class ArrayIsFullException extends \RuntimeException
{
    public function __construct(
        $message = 'Cannot add items to array/collection, it is already full',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
