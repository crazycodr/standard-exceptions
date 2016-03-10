<?php

namespace StandardExceptions\ArrayExceptions;

/**
 * Use this exception when an operation on an array tries to add an element using a key that already exists in the
 * collection of items.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class KeyAlreadyExistsException extends \RuntimeException
{
    public function __construct($message = 'Key already exists in array/collection', $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
