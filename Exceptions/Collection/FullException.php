<?php

namespace Exceptions\Collection;

/**
 * Use this exception when an operation on a collection cannot be achieved because the array has already reached it's
 * limit and cannot accept more data.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class FullException extends CollectionException
{
    public function __construct(
        $message = 'Cannot add items to array/collection, it is already full',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
