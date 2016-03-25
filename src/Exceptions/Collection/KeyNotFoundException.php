<?php

namespace Exceptions\Collection;

/**
 * Use this exception when an operation on a collection tries to retrieve an element using a key that doesn't exist in
 * the collection of items.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class KeyNotFoundException extends BaseException
{

    public function __construct($message = 'Key not found in array/collection', $code = 0, $previous = null)
    {

        parent::__construct($message, $code, $previous);
    }
}
