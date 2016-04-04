<?php

namespace Exceptions\Operation;

/**
 * Use this exception in the event something went wrong with the state of the application and you cannot allow
 * executing this operation because of that state. For example, processing a report with no report specified would
 * yield an exception of type InvalidOperationException or something similar/custom based on it. This whole set of
 * exceptions didn't exist before but should have as many operations can end up being impossible to execute.
 *
 * Use this exception sparingly and create sub exceptions of this exceptions to be more verbose when necessary.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class InvalidOperationException extends OperationException
{
    public function __construct(
        $message = 'The attempted operation resulted in an unexpected/invalid state and cannot continue',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
