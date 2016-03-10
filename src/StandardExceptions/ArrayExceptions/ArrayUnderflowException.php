<?php

namespace StandardExceptions\ArrayExceptions;

/**
 * Use this exception when an operation on an array cannot be achieved because the array is already empty.
 *
 * This exception is deprecated, you should instead migrate to ArrayIsEmptyException as soon as possible as this
 * exception is only kept for backward compatibility with the old UnderflowException from PHP SPL.
 *
 * @deprecated in favor of \StandardExceptions\Array\ArrayIsEmptyException, will be removed in version 2.0
 *
 * @author     Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license    MIT
 */
class ArrayUnderflowException extends \UnderflowException
{
    public function __construct(
        $message = 'Cannot remove items from array/collection, it is already empty',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
