<?php

namespace Exceptions\Collection;

/**
 * Use this exception when an operation on a collection tries to add an element using a key that already exists in the
 * collection of items.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class KeyAlreadyExistsException extends CollectionException
{
    public function __construct($message = 'Key already exists in array/collection', $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
