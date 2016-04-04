<?php

namespace Exceptions\Collection;

/**
 * Use this exception when an operation on a collection that is locked/read-only tries to modify the collection of
 * items.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class ReadOnlyArrayException extends CollectionException
{
    public function __construct(
        $message = 'Array/Collection is read-only, you cannot alter it',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
