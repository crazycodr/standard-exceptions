<?php

namespace StandardExceptions\OperationExceptions;

/**
 * Use this exception when someone is calling a function/method that is not implemented yet. This is a good practice
 * when implementing a lot of new functionality. Coupled to unit tests, you shouldn't miss a NotImplementedYetException
 * but at least the message is more verbose.
 *
 * @author   Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license  MIT
 */
class NotImplementedYetException extends InvalidOperationException
{
    public function __construct($message = 'Feature not implemented yet', $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
