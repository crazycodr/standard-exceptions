<?php

namespace StandardExceptions\ArrayExceptions;

/**
 * Use this exception when an operation on an array tries to retrieve an element using a key that doesn't exist in
 * the collection of items.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class KeyNotFoundException extends \OutOfBoundsException
{
    public function __construct($message = 'Key not found in array/collection', $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
