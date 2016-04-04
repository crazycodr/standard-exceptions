<?php

namespace Exceptions\Collection;

/**
 * Use this exception when an operation on a collection item that is locked/read-only tries to modify the item in
 * question.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class ReadOnlyArrayItemException extends CollectionException
{
    public function __construct(
        $message = 'Array/Collection item is read-only, you cannot modify it',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
