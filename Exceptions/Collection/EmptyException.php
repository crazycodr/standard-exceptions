<?php

namespace Exceptions\Collection;

/**
 * Use this exception when an operation on a collection cannot be achieved because the array is already empty.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class EmptyException extends CollectionException
{
    public function __construct(
        $message = 'Array/collection is currently empty',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
