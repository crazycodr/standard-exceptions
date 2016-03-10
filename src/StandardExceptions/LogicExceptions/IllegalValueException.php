<?php

namespace StandardExceptions\LogicExceptions;

/**
 * Use this exception when an argument passed on to a function doesn't fit in the natural domain logic such as the 8th
 * day of a week or a division by 0. It goes farther than the usual Validation exception in a sense that it checks for
 * Illegal values more than invalid values.
 *
 * This exception exists only to be backwards compatible with the DomainException but should be replaced in favor
 * InvalidValueException from the Validation namespace.
 *
 * @deprecated in favor of \StandardExceptions\ValidationExceptionsExceptions\InvalidValueException, will be removed in
 *             version 2.0
 *
 * @author     Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license    MIT
 */
class IllegalValueException extends \DomainException
{
    public function __construct(
        $message = 'Value doesn\'t fit into the allowed domain values (Ex: division by zero, 8th day of a week, etc)',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
