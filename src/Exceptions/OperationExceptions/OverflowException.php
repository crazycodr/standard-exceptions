<?php

namespace Exceptions\OperationExceptions;

/**
 * Use this exception in the event that an operation would result in a value that would overflow due to it's size.
 * Normaly speaking this exception should not be used in the userland because value overflows is something PHP can
 * detect and work with.
 *
 * It was created only for backwards compatibility with OverflowException and i don't see why anyone would bother
 * throwing this although catching it could be profitable.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class OverflowException extends \OverflowException
{
    public function __construct($message = 'Operation resulted in a value overflow', $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
