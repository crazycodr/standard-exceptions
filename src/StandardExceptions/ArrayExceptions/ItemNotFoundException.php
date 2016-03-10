<?php

namespace StandardExceptions\ArrayExceptions;

/**
 * Use this exception when an operation on an array to retrieve an expected element from it but that element doesn't
 * exist in the collection of items.
 *
 * There is a subtle difference with KeyNotFoundException whereas the KeyNotFoundException is used when a user wants to
 * find a specific element by key and ItemNotFoundException is part of an operation that expected an array result
 * containing and element X and it didn't not exist. For example, using ItemNotFoundException in a datasource fetch
 * that failed finding a specific result would be the best use case.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class ItemNotFoundException extends \OutOfBoundsException
{
    public function __construct(
        $message = 'Expected specific item in array/collection not found',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
