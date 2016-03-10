<?php

namespace StandardExceptions\ArrayExceptions;

/**
 * Use this exception when an operation on an array cannot be achieved because the array is already empty.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class ArrayIsEmptyException extends \RuntimeException
{
    public function __construct(
        $message = 'Cannot remove items from array/collection, it is already empty',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
